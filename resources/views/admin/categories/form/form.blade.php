<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('module', 'Module') !!}
    {!! Form::select('module', getModulesArray(), null, ['class'=>'form-control']) !!}
</div>
