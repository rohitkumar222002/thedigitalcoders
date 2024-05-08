<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{{asset('asset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('asset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('asset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('asset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('asset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('asset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('asset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('asset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('asset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('asset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('asset/vendor/select2/select2.min.js')}}">
    </script>
    <!-- Main JS-->
    <script src="{{asset('asset/js/main.js')}}"></script>
    <script type="text/javascript">
$(function(){
  $('#file').change(function(){
    var input = this;
    var url = $(this).val();
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
     {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#img').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
    }
    else
    {
      $('#img').attr('src', '{{asset('asset/no-preview.jpeg')}}');
    }
  });

});

    </script>
                 <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>