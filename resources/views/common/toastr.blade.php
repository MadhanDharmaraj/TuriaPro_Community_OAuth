

    <script type="text/javascript">

        function _toastCall(className,message,title="") {

            switch(className){
                case 'info':
                    title = (title)?title:'Information';

                    toastr.info(message, title, { "closeButton": true });
                    break;

                case 'warning':
                    title = (title)?title:'Warning';
                    toastr.warning(message, title, { "closeButton": true });
                    break;

                case 'success':
                    title = (title)?title:'Success';
                    toastr.success(message, title, { "closeButton": true });
                    break;

                case 'error':
                    title = (title)?title:'Error!';
                    toastr.error(message, title, { "closeButton": true });
                    break;
            }           

        }


        function _success(message,title='') {
            return _toastCall('success',message,title);
        }

        function _info(message,title='') {
            return _toastCall('info',message,title);
        }

        function _warning(message,title='') {
            return _toastCall('warning',message,title);
        }

        function _error(message,title='') {
            return _toastCall('error',message,title);
        }

        @if(session()->has('success'))
            _success("{{session()->get('success')}}","{{session()->get('title')}}");
        @endif
        
        @if(session()->has('info'))
            _info("{{session()->get('info')}}","{{session()->get('title')}}");
        @endif

        @if(session()->has('warning'))
            _warning("{{session()->get('warning')}}","{{session()->get('title')}}");
        @endif

        @if(session()->has('error'))
            _error("{{session()->get('error')}}","{{session()->get('title')}}");
        @endif
      
    </script>