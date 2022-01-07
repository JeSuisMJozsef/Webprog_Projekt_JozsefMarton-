@section('modals')
    @switch(\Illuminate\Support\Facades\Session::get('modal'))
        @case('authSuccess')
        <script>testmodal('alert alert-success', 'You are logged in!')</script>
        @break

        @case('userdeletesuccess')
        <script>testmodal('alert alert-success', 'User Deleted successfully!')</script>
        @break

        @case('userdeleteerror')
        <script>testmodal('alert alert-danger', 'You can`t delete yourself. Use profile to delete your account!')</script>
        @break

        @case('editedbase')
        <script>testmodal('alert alert-success', 'Successfully edited the base of the userdata')</script>
        @break

        @case('editedwithpassword')
        <script>testmodal('alert alert-success', 'Successfully edited the base data and/or the password')</script>
        @break

        @case('createdUser')
        <script>testmodal('alert alert-success', 'Successfully added a new user')</script>
        @break

        @case('notfound')
        <script>testmodal('alert alert-warning', 'Page not found!')</script>
        @break


    @endswitch

    <div class="modal h-auto w-auto align-self-end mt-5" id="customModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-body p-0">
            <div id="CMAlert" class="d-flex justify-content-between p-2 m-0 me-2" role="alert">
                <p class="m-0" id="CMAlertMessage"></p>
                <button type="button" class="btn-close" aria-label="Close" onclick="closemodal('customModal')"></button>
            </div>
        </div>
@endsection