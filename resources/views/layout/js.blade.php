  <!-- latest jquery-->
  <script src="{{ asset('template_dashboard/assets/js/jquery-3.5.1.min.js') }}"></script>
  <!-- feather icon js-->
  {{-- <script src="https://unpkg.com/feather-icons"></script> --}}
  <script src="{{ asset('template_dashboard/assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <!-- Sidebar jquery-->
  <script src="{{ asset('template_dashboard/assets/js/sidebar-menu.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/config.js') }}"></script>
  <!-- Bootstrap js-->
  <script src="{{ asset('template_dashboard/assets/js/bootstrap/popper.min.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Plugins JS start-->

  {{-- maps --}}
	<script src="{{ asset('template_dashboard/assets/js/map-js/mapsjs-core.js') }}"></script>
    <script src="{{ asset('template_dashboard/assets/js/map-js/mapsjs-service.js') }}"></script>
    <script src="{{ asset('template_dashboard/assets/js/map-js/mapsjs-ui.js') }}"></script>
    <script src="{{ asset('template_dashboard/assets/js/map-js/mapsjs-mapevents.js') }}"></script>
    <script src="{{ asset('template_dashboard/assets/js/map-js/custom.js') }}"></script>
<!-- Plugins JS Ends-->
 <!-- Plugins JS start-->
 <script src="https://laravel.pixelstrap.com/viho/assets/js/sweet-alert/sweetalert.min.js"></script>
 <script src="https://laravel.pixelstrap.com/viho/assets/js/sweet-alert/app.js"></script>
 {{-- table --}}

    {{-- date --}}
  <script src="{{ asset('template_dashboard/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
  <script src="{{ asset('template_dashboard/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_dashboard/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="{{ asset('template_dashboard/assets/js/script.js') }}"></script>
  {{-- <script src="{{ asset('template_dashboard/assets/js/theme-customizer/customizer.js') }}"></script> --}}
  <!-- Plugin used-->

  {{-- Sweetalert 2 --}}
  <script src="{{ asset('template_dashboard') }}/assets/js/sweetalert2/sweetalert2.min.js"></script>
  </body>

<script>
     $(document).ready(function() {
            $(document).on('click', '.buttonDeletion', function(e) {
                e.preventDefault();
                let form = $(this).parents('form');

                Swal.fire({
                    title: 'Apakah Anda yakin ingin menghapus data ini?',
                    text: "Data yang dihapus tidak bisa dikembalikan",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!'
                }).then((Delete) => {
                    if (Delete.isConfirmed) {
                        form.submit()
                        swal({
                            title: 'Dikonfirmasi!',
                            text: 'Data akan dihapus.',
                            icon: 'success',
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    } else {
                        swal.close();
                    }
                });
            })
        })

</script>
  </html>
