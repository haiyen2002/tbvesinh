<footer class="container-fluid admin-footer bg-secondary rounded shadow">
    <div class="row">
        <div class="col-md-12">
            <div class="footer-copyright py-2 text-center">
                <img height="45" src="{{ @url('images/logo.png') }}" alt="">
                <span class="text-white">Copyright &copy; {{ date('Y') }} {{ $site['site_name'] }}</span>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('js/toastGenerate.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
