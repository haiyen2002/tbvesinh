<div class="toasts-container"></div>
@if(Session::has('errors'))
<script>
    window.addEventListener('load',()=>{
        let message = @json(Session::get('errors'));
        showToast({ type: AlertTypes.ERROR, title: 'Lỗi', message});
    });
</script>
@endif
@if(Session::has('messages'))
<script>
    window.addEventListener('load',()=>{
        let message = @json(Session::get('messages'));
        showToast({ type: AlertTypes.SUCCESS, title: 'Thành công', message});
    });
</script>
@endif
