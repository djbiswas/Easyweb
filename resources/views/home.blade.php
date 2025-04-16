@extends('layouts.front')

@section('style')
<style>

    .slider-wrapper {
    height: 198px; /* 3 items * 66px each */
    overflow: hidden;
    position: relative;
    }

    .slider {
    margin: 0;
    padding: 0;
    list-style: none;
    transition: transform 1s ease-in-out;
    }

    .list-group-item {
    height: 66px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

</style>
@endsection

@section('content')
    <p>Save your money & time</p>
    </div>

    <!-- Buttons -->
    <div class="container my-3 text-center">
        <div class="row text-light">
            <div class="col-4 col-md-4 mb-3 px-1 ">
                <a href="/recharge" class="btn btn-warning w-100 text-light btn-main-dj"><i
                        class="fas fa-dollar-sign"></i><br>Recharge</a>
            </div>
            <div class="col-4 col-md-4 mb-3 px-1">
                <a href="/withdraw" class="btn btn-warning w-100 text-light btn-main-dj"><i
                        class="fas fa-wallet"></i><br>Withdraw</a>
            </div>
            <div class="col-4 col-md-4 mb-3 px-1">
                <a href="/companyprofile" class="btn btn-warning w-100 text-light btn-main-dj px-1"><i class="fas fa-id-card"></i><br>Company
                    Profile</a>
            </div>
        </div>
    </div>

    <!-- Image -->
    <div class="container mb-4">
        <img src="/imgs/topimg.jpg" class="img-fluid w-100" alt="Bank Image">
    </div>

    <!-- Activities Section -->
    <div class="container my-3 mb-4">
        <h4>Activities</h4>
        @foreach ($user_actives as $user_active)
        <div class="card p-3 mb-2">
            <div class="row align-items-center">
                <!-- Image on the left -->
                <div class="col-auto ">
                    <img src="/imgs/pi-network-icon.png" alt="Advertisement" class="img-fluid" style="max-width: 70px;">
                </div>

                <!-- Content in the middle -->

                <div class="col">
                    <p class="mb-0">{{$user_active->name}}</p>
                    <strong class="text-success">{{$user_active->task_benefits}} USDT</strong>
                    <a href="/user-task/{{$user_active->id}}" class="" style="float: right;">>></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Task Hall -->
    <div class="container my-3 mb-4">
        <h4>Task Hall</h4>
        <div class="row">
            @foreach ($userVips as $vip)
                <div class="col-6 col-md-4 mb-3" *ngFor="let vip of vips">
                    <div class="card text-center p-1">
                        <img src="/imgs/vipImg.jpg" class="img-fluid" alt="VIP">
                        <h5>{{ $vip->name }}</h5>
                        <p>Order Commission: <strong>{{ $vip->total_profit }} USDT</strong></p>
                    </div>
                </div>
            @endforeach

            @foreach ($notUserVips as $notUserVip)
                <div class="col-6 col-md-4 mb-3" *ngFor="let vip of vips">
                    <div class="card text-center p-1">
                        <img src="/imgs/vipImg.jpg" class="img-fluid" alt="VIP">
                        <div data-v-e66cd65e="" class="lock-img">
                            <svg data-v-e66cd65e="" class="svg-icon 2-lock text-79px c-$btn-text2 text-79px c-$btn-text2"
                                aria-hidden="true">
                                <use xlink:href="#svg-2-lock">
                                    <symbol id="svg-2-lock" viewBox="0 0 81 80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M45.9101 36.1252V32.4202C45.9101 29.5473 43.4891 27.2204 40.5 27.2204C37.511 27.2204 35.09 29.5511 35.09 32.424V36.129H45.9101V36.1252ZM30.91 36.1666L30.9061 36.0499V31.9797C30.9061 29.7243 31.8385 27.5593 33.4995 25.9628C35.1605 24.3663 37.4091 23.4702 39.7596 23.4702H41.2443C46.1334 23.4702 50.0939 27.2806 50.0939 31.9759V36.1666C52.3739 36.4716 54.0702 38.3467 54.0702 40.5606V50.2863C54.0702 52.7374 52.0057 54.7217 49.4554 54.7217H31.5446C28.9944 54.7217 26.9298 52.7374 26.9298 50.2863V40.5644C26.9298 38.3504 28.6261 36.4754 30.91 36.1666ZM39.4345 46.1821V49.0814C39.4345 49.6462 39.9124 50.1055 40.5 50.1055C41.0876 50.1055 41.5656 49.6462 41.5656 49.0814V46.1821C42.8779 45.6889 43.6418 44.3673 43.3794 43.0382C43.1169 41.7053 41.9103 40.7414 40.5 40.7414C39.0897 40.7414 37.8792 41.7053 37.6207 43.0382C37.3582 44.3673 38.1221 45.6889 39.4345 46.1821Z"
                                            fill="white"></path>
                                        <path d="M58.8597 57.8469L80.4123 78.9417" stroke="white" stroke-opacity="0.3">
                                        </path>
                                        <path d="M0.587738 0.812988L25.3334 25.0329" stroke="white" stroke-opacity="0.3">
                                        </path>
                                        <path d="M57.2632 23.4702L80.4123 0.812876" stroke="white" stroke-opacity="0.3">
                                        </path>
                                        <path d="M0.587738 78.9417L22.1404 57.8469" stroke="white" stroke-opacity="0.3">
                                        </path>
                                    </symbol>
                                </use>
                            </svg>
                        </div>
                        <h5>{{ $notUserVip->name }}</h5>
                        <p>Order Commission: <strong>{{ $notUserVip->total_profit }} USDT</strong></p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <!-- Member List -->
    <div class="container my-3 mb-4 custom-dj-animations">
        <h4>Member List</h4>
        <div class="slider-wrapper">
            <ul id="memberSlider" class="list-group slider">
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
                <li class="list-group-item">VIP2 - ni*****@hotmail.com <span class="text-success">+$9.00</span></li>
                <li class="list-group-item">VIP7 - bg*****@icloud.com <span class="text-success">+$7,616.00</span></li>
                <li class="list-group-item">VIP1 - 1*****5865 <span class="text-success">+$1.00</span></li>
            </ul>
        </div>
    </div>
</div>


    <!-- Regulatory Authority -->
    <div class="container my-3">
        <h4>Regulatory Authority</h4>
        <div class="row mb-5">
            <div class="col-6 col-md-4 mb-3">
                <img src="https://coingape.com/wp-content/uploads/2025/02/Pi-network-launch.jpg" alt=""
                    style="width: 100%">
            </div>
            <div class="col-6 col-md-4 mb-3">
                <img src="https://coingape.com/wp-content/uploads/2025/02/Pi-network-launch.jpg" alt=""
                    style="width: 100%">
            </div>

        </div>


    </div>
@endsection

@section('scripts')
    <script>
        const slider = document.getElementById('memberSlider');
        const itemHeight = 66; // must match CSS height
        let isAnimating = false;

        function slideUpOneItem() {
            if (isAnimating) return;
            isAnimating = true;

            // Slide up
            slider.style.transition = 'transform 1s ease-in-out';
            slider.style.transform = `translateY(-${itemHeight}px)`;

            // After animation ends
            setTimeout(() => {
                // Move first item to end
                const firstItem = slider.children[0];
                slider.appendChild(firstItem);

                // Reset position without transition
                slider.style.transition = 'none';
                slider.style.transform = 'translateY(0)';

                isAnimating = false;
            }, 1000); // match transition duration
        }

        // Start the loop
        setInterval(slideUpOneItem, 3000);

    </script>
@endsection
