<!-- Right Sidebar -->
@include('admin.partials.rightbar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
{{-- <div class="rightbar-overlay"></div> --}}

<!-- JAVASCRIPT -->
<script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="{{ asset('backend') }}/assets/libs/pace-js/pace.min.js"></script>
<!-- Required datatable js -->
<script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
</script>

<!-- init js -->
<script src="{{ asset('backend') }}/assets/js/pages/datatable-pages.init.js"></script>
<!-- choices js -->
<script src="{{ asset('backend') }}/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!-- Sweet Alerts js -->
<script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

<script src="{{ asset('backend') }}/assets/js/app.js"></script>
@stack('per_page_js')
