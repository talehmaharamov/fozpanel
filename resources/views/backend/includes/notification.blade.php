@if(Session::has('success'))
    <button class="mr-2 btn btn-primary success">Success message!</button>
    <script>
        $('.widget-content .success').on('click', function () {
            swal({
                title: 'Good job!',
                // text: "You clicked the!",
                type: 'success',
                padding: '2em'
            })
        })
    </script>
@endif
<link href="{{asset('backend/ssets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('backend/lugins/animate/animate.css')}}" rel="stylesheet" type="text/css"/>
<script src="{{asset('backend/lugins/sweetalerts/promise-polyfill.js')}}"></script>
<link href="{{asset('backend/lugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('backend/lugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('backend/ssets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css"/>

<script src="{{asset('backend/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('backend/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('backend/plugins/sweetalerts/custom-sweetalert.js')}}"></script>

