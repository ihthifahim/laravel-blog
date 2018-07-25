@extends('layouts.manage')



@section('content')

<div class="flex-container">
    <div class="flex-container m-t-30">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Update User</h1>
            </div>

     </div>
     <hr class="m-t-10">

    <div class="columns">
        <div class="column">
        <form action="{{route('users.edit','$user->$id')}}" method="POST">
        {{method_field('PUT')}}
        {{csrf_field()}}
        
        <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
            <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
            </p>
        </div>

        <div class="field">
                <label for="email" class="label">Email</label>
                <p class="control">
                <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                </p>
        </div>

        <div class="field">
                <label for="password" class="label">Password</label>
                <b-radio-group v-model="password_options">

                    <div class="field">
                    <b-radio value="keep">Do Not Change Password</b-radio>
                    </div>

                    <div class="field">
                    <b-radio value="auto">Auto-Generate New Password</b-radio>
                    </div>
                    
                    <div class="field">
                    <b-radio value="manual">Manually Set New Password</b-radio>
                    </div>

                </b-radio-group>
                
                <p class="control">
                    <input type="password" class="input m-t-10" name="password" v-if="password_options = 'manual'" id="password" placeholder="Manually give a password to this user">
                </p>
        </div>

        <button class="button is-primary">Edit User</button>
        </form>
        </div>
    </div>

</div><!-- end of .flex-container-->

@endsection

@section('scripts')

<script>
var app = new Vue({
    el: '#app',
    data:{
        password_options: 'keep'
    }
});   
</script>
@endsection