

</div>
<!-- End Page Content  -->
</div>


<!-- End Wrapper -->

<!-- JS Scripts -->

<!-- jQuery CDN - Slim version (=without AJAX) -->

<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>


{{--<!-- Bootstrap JS -->--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- jQuery For Scroller Bar -->
<script src="/assets/js/sidebar.js"></script>
<!-- jQuery For User Dropdown -->
<script src="/assets/js/dropdown.js"></script>

<!-- datatable  -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<script>


    $('#report').DataTable({
        lengthMenu: [
            [ 50, 100, 1000, -1 ],
            [ '50 rows', '100 rows', '1000 rows', 'Show all' ]
        ],
        dom: 'lftip',
        buttons: [
            'print', 'csv', 'pdf'
        ]
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>
<script !src="">
    $(document).ready(function() {
        $('.select2_op').select2();
    });

    $(document).ready(function() {
        $('.select2_op2').select2();
    });
</script>

<script src="/assets/lightbox2-2.11.4/dist/js/lightbox.js"></script>

{{--<script>--}}
{{--    $('#flash-overlay-modal').modal();--}}
{{--</script>--}}
<script>
    // $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@yield('scripts')
</body>

</html>
