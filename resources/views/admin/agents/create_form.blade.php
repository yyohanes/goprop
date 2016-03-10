<div class="col-md-4">
    <!--
    <div class="form-group">
        {!! Form::label('username', 'Username *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('username', null, array('class'=>'form-control', 'id' => 'username', 'placeholder'=>'Username')) !!}
        </div>
    </div>
    -->

    <div class="form-group">
        {!! Form::label('email', 'Email *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::email('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'example@example.com')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::password('password', array('id' => 'password', 'class'=>'form-control','placeholder'=>'Password')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('repeat_password', 'Repeat Password *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::password('password_confirmation', array('id' => 'repeat_password', 'class'=>'form-control','placeholder'=>'Repeat Password')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('status-select', 'Status *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::select('status', \GoProp\Models\User::getStatusLabel(), null, array('id' => 'status-select','class'=>'form-control')) !!}
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        {!! Form::label('profile_picture', 'Profile Picture', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            @if(!empty($agent->profile->profile_picture))
                <div class="profile-picture">
                    <img class="img-responsive" src="{{ url('images/profile_picture/'.$agent->profile->profile_picture) }}" /><a class="remove-image" href="#"><i class="fa fa-close"></i></a>
                    {!! Form::hidden('remove_profile_picture', 0) !!}
                </div>
            @endif

            {!! Form::file('profile[profile_picture]', ['id' => 'profile_picture']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('profile_title', 'Salute', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::select('profile[title]', ['' => trans('forms.please_select')] + \GoProp\Models\Profile::getTitleLabel(), null, ['class' => 'form-control', 'id' => 'profile_title']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('first_name', 'First Name *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[first_name]', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'First Name')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[last_name]', null, array('class'=>'form-control' , 'id' => 'last_name' ,'placeholder'=>'Last Name')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('occupation', 'Occupation', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[occupation]', null, array('class'=>'form-control' , 'id' => 'occupation' ,'placeholder'=>'GoProp Agent')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('mobile_phone_number', 'Mobile Phone Number *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[mobile_phone_number]', null, array('class'=>'form-control', 'id' => 'mobile_phone_number','placeholder'=>'Mobile Phone Number')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('home_phone_number', 'Home Phone Number', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[home_phone_number]', null, array('class'=>'form-control', 'id' => 'home_phone_number', 'placeholder'=>'Home Phone Number')) !!}
        </div>
    </div>
</div>

<div class="col-md-4">
   <div class="form-group">
        {!! Form::label('address', 'Address *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::textarea('profile[address]', null, array('class'=>'form-control', 'id' => 'address', 'rows' => 3)) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('location', 'Location *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::select('profile[province]', ['' => trans('forms.please_select')] + \GoProp\Facades\AddressHelper::getProvinces(true), null, ['class' => 'form-control form-address-selector-province', 'id' => 'profile_province']) !!}
            <div style="height: 10px;"></div>
            {!! Form::select('profile[city]', ['' => trans('forms.please_select')] + \GoProp\Facades\AddressHelper::getCities(old('profile.province', $agent->profile->province), true), null, ['class' => 'form-control form-address-selector-city', 'id' => 'profile_city']) !!}
            <div style="height: 10px;"></div>
            {!! Form::select('profile[subdistrict]', ['' => trans('forms.please_select')] + \GoProp\Facades\AddressHelper::getSubdistricts(old('profile.city', $agent->profile->city), true), null, ['class' => 'form-control form-address-selector-subdistrict', 'id' => 'profile_subdistrict']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('postal_code', 'Postal Code *', array('class'=>'col-md-4 control-label')) !!}
        <div class="col-md-8">
            {!! Form::text('profile[postal_code]', null, array('class'=>'form-control', 'id' => 'postal_code' ,'placeholder'=>'Postal Code')) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 text-center">
        {!! Form::hidden('role', 'agent') !!}
        {!! Form::submit('Save',array('class'=>'btn btn-primary')) !!}
        {!! Form::reset('Reset',array('class'=>'btn btn-default')) !!}

        <a href="{{ route('admin.agent.index') }}" class="btn btn-warning">Cancel</a>
    </div>
</div>