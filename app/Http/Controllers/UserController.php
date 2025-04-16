<?php

namespace App\Http\Controllers;

//use App\Models\Role as ModelsRole;
use App\Models\Role;
// use App\Models\User as ModelsUser;
use App\Models\User;
//use App\Models\User_info;
use App\Models\User_type;
use Illuminate\Http\Request;

use DB;
use Session;
use Hash;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Input;
use Laratrust\Models\Role as LaratrustModelsRole;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AuthUser::orderBy('id', 'desc')->with('usershares')->paginate();

        $login_user = auth()->user();
        if ($login_user->hasRole(['devadmin', 'admin', 'editor', 'member'])) {
            $users = AuthUser::whereNotIn('id', [1])->orderBy('id', 'desc')->with('usershares')->get();
        }

        // if ($login_user->hasRole(['admin', 'editor', 'member'])) {
        //     $users = AuthUser::whereNotIn('id', [1])->orderBy('id', 'desc')->get();
        // }

        return view('users.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_list = User::whereNotIn('id', [1, 2])->pluck('name', 'id');
        $user_types = User_type::pluck('name', 'id');
        if (Auth()->user()->id == '1') {
            $roles = Role::pluck('display_name', 'id');
        } else {
            $roles = Role::whereNotIn('id', [1, 2])->pluck('display_name', 'id');
        }
        return view('users.create', compact('user_list', 'user_types', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|unique:users,phone',
            'nid_no' => 'sometimes',
            'nid_file' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'father_name' => 'sometimes',
            'mother_name' => 'sometimes',
            'spouse_name' => 'sometimes',
            'present_address' => 'sometimes',
            'permanent_address' => 'sometimes',
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'referrar' => 'sometimes',
            'nominee_name' => 'sometimes',
            'nominee_father' => 'sometimes',
            'nominee_mother' => 'sometimes',
            'nominee_mobile' => 'sometimes',
            'nominee_photo' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'nominee_nid' => 'sometimes',
            'nominee_nid_file' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'nominee_relation' => 'sometimes'
        ]);

        if ($request->email) {
            $this->validate($request, [
                'email' => 'sometimes|email|unique:users,email,'
            ]);
        }

        if (!empty($request->password)) {
            $password = trim($request->password);
        } else {
            # set the manual password
            $length = 10;
            $keyspace = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
            $str = '';
            $max = mb_strlen($keyspace, '8bit') - 1;
            for ($i = 0; $i < $length; ++$i) {
                $str .= $keyspace[random_int(0, $max)];
            }
            $password = $str;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->member_share = $request->member_share;
        $user->user_type_id = $request->user_type_id;
        $user->password = FacadesHash::make($password);

        $user->nid_no = $request->nid_no;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->spouse_name = $request->spouse_name;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->referrar = $request->referrar;
        $user->nominee_name = $request->nominee_name;
        $user->nominee_father = $request->nominee_father;
        $user->nominee_mother = $request->nominee_mother;
        $user->nominee_mobile = $request->nominee_mobile;
        $user->nominee_nid = $request->nominee_nid;
        $user->nominee_relation = $request->nominee_relation;
        // $user->editor = Auth()->user()->id;

        if ($request->photo) {
            $picture_1 = $request->photo;
            $picturename_1 = $picture_1->getClientOriginalName();
            $picturename_1 = explode('.', $picturename_1);
            $picturenameexe_1 = end($picturename_1);
            $picturename_1 = uniqid() . '.' . $picturenameexe_1;
            $user->photo = $picturename_1;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_1->move($destinationPath, $picturename_1);
        }

        if ($request->nid_file) {
            $picture_2 = $request->nid_file;
            $picturename_2 = $picture_2->getClientOriginalName();
            $picturename_2 = explode('.', $picturename_2);
            $picturenameexe_2 = end($picturename_2);
            $picturename_2 = uniqid() . '.' . $picturenameexe_2;
            $user->nid_file = $picturename_2;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_2->move($destinationPath, $picturename_2);
        }

        if ($request->nominee_photo) {
            $picture_3 = $request->nominee_photo;
            $picturename_3 = $picture_3->getClientOriginalName();
            $picturename_3 = explode('.', $picturename_3);
            $picturenameexe_3 = end($picturename_3);
            $picturename_3 = uniqid() . '.' . $picturenameexe_3;
            $user->nominee_photo = $picturename_3;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_3->move($destinationPath, $picturename_3);
        }

        if ($request->nominee_nid_file) {
            $picture_4 = $request->nominee_nid_file;
            $picturename_4 = $picture_4->getClientOriginalName();
            $picturename_4 = explode('.', $picturename_4);
            $picturenameexe_4 = end($picturename_4);
            $picturename_4 = uniqid() . '.' . $picturenameexe_4;
            $user->nominee_nid_file = $picturename_4;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_4->move($destinationPath, $picturename_4);
        }

        $user->save();

        if ($request->roles && $request->roles != '') {
            $user->syncRoles(explode(',', $request->roles));
        }

        flash('Member Adding Success.')->success();
        return redirect()->route('users.show', $user->id);

        // if () {
        //
        // } else {
        //   Session::flash('danger', 'Sorry a problem occurred while creating this user.');
        //   return redirect()->route('users.create');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        return view("users.show", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_list = AuthUser::pluck('name', 'id');
        $user = User::where('id', $id)->with('roles')->first();
        $user_types = User_type::pluck('name', 'id');
        if (Auth()->user()->id == '1') {
            $roles = Role::pluck('name', 'id');
        } else {
            $roles = Role::whereNotIn('id', [1, 2])->pluck('name', 'id');
        }
        return view("users.edit", compact('user_list', 'user_types', 'user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|unique:users,phone,' . $id,
            // 'email' => 'sometimes|email|unique:users,email,' . $id,

            'nid_no' => 'sometimes',
            'nid_file' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'father_name' => 'sometimes',
            'mother_name' => 'sometimes',
            'spouse_name' => 'sometimes',
            'present_address' => 'sometimes',
            'permanent_address' => 'sometimes',
            'photo' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'referrar' => 'sometimes',
            'nominee_name' => 'sometimes',
            'nominee_father' => 'sometimes',
            'nominee_mother' => 'sometimes',
            'nominee_mobile' => 'sometimes',
            'nominee_photo' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'nominee_nid' => 'sometimes',
            'nominee_nid_file' => 'sometimes|mimes:jpeg,bmp,png,jpg|max:2024',
            'nominee_relation' => 'sometimes'

        ]);

        if ($request->email) {
            $this->validate($request, [
                'email' => 'sometimes|email|unique:users,email,' . $id
            ]);
        }


        $user = User::findOrFail($id);
        $user->phone = $request->phone;
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = FacadesHash::make($request->password);
        }

        $user->nid_no = $request->nid_no;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->spouse_name = $request->spouse_name;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->referrar = $request->referrar;
        $user->nominee_name = $request->nominee_name;
        $user->nominee_father = $request->nominee_father;
        $user->nominee_mother = $request->nominee_mother;
        $user->nominee_mobile = $request->nominee_mobile;
        $user->nominee_nid = $request->nominee_nid;
        $user->nominee_relation = $request->nominee_relation;
        // $user->editor = Auth()->user()->id;

        $user_photo = $user->photo;
        $user_nid_file = $user->nid_file;
        $user_nominee_photo = $user->nominee_photo;
        $user_nominee_nid_file = $user->nominee_nid_file;

        //$user_info = User_info::find($user_info_id);

        if ($request->photo) {
            $picture_1 = $request->photo;
            $picturename_1 = $picture_1->getClientOriginalName();
            $picturename_1 = explode('.', $picturename_1);
            $picturenameexe_1 = end($picturename_1);
            $picturename_1 = uniqid() . '.' . $picturenameexe_1;
            $user->photo = $picturename_1;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_1->move($destinationPath, $picturename_1);

            if (\File::exists(public_path('img/users/' . $user_photo))) {
                \File::delete(public_path('img/users/' . $user_photo));
            }
        }
        if ($request->nid_file) {
            $picture_2 = $request->nid_file;
            $picturename_2 = $picture_2->getClientOriginalName();
            $picturename_2 = explode('.', $picturename_2);
            $picturenameexe_2 = end($picturename_2);
            $picturename_2 = uniqid() . '.' . $picturenameexe_2;
            $user->nid_file = $picturename_2;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_2->move($destinationPath, $picturename_2);

            if (\File::exists(public_path('img/users/' . $user_nid_file))) {
                \File::delete(public_path('img/users/' . $user_nid_file));
            }
        }

        if ($request->nominee_photo) {
            $picture_3 = $request->nominee_photo;
            $picturename_3 = $picture_3->getClientOriginalName();
            $picturename_3 = explode('.', $picturename_3);
            $picturenameexe_3 = end($picturename_3);
            $picturename_3 = uniqid() . '.' . $picturenameexe_3;
            $user->nominee_photo = $picturename_3;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_3->move($destinationPath, $picturename_3);

            if (\File::exists(public_path('img/users/' . $user_nominee_photo))) {
                \File::delete(public_path('img/users/' . $user_nominee_photo));
            }
        }

        if ($request->nominee_nid_file) {
            $picture_4 = $request->nominee_nid_file;
            $picturename_4 = $picture_4->getClientOriginalName();
            $picturename_4 = explode('.', $picturename_4);
            $picturenameexe_4 = end($picturename_4);
            $picturename_4 = uniqid() . '.' . $picturenameexe_4;
            $user->nominee_nid_file = $picturename_4;
            $destinationPath = public_path();
            $destinationPath = $destinationPath . '/img/users/';
            $picture_4->move($destinationPath, $picturename_4);

            if (\File::exists(public_path('img/users/' . $user_nominee_nid_file))) {
                \File::delete(public_path('img/users/' . $user_nominee_nid_file));
            }
        }


        $user->save();

        if ($request->roles) {
            $user->syncRoles(explode(',', $request->roles));
        }


        flash('User Updating Success.')->success();

        return redirect()->route('users.show', $id);

        // if () {
        //   return redirect()->route('users.show', $id);
        // } else {
        //   Session::flash('error', 'There was a problem saving the updated user info to the database. Try again later.');
        //   return redirect()->route('users.edit', $id);
        // }
    }

    public function change_member_pass($id)
    {
        $user = User::find($id);
        return view("users.change_member_pass", compact('user'));
    }

    public function member_pass_update(Request $request, $id)
    {

        if ($id == auth()->user()->id) {
            //return $request->all();

            $user = User::findOrFail(auth()->user()->id);
            if ($request->password) {
                $user->password = FacadesHash::make($request->password);
            }
            $user->save();
        }
        flash('Password Updating Success.')->success();
        return redirect()->route('users.show', auth()->user()->id);
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
