{!! Form::open(array('route' => 'item.store', 'files' => 'true')) !!}
    {!! csrf_field() !!}

{!! Form::label('Item:') !!}
{!! Form::text('name') !!}

 {!! Form::label('Price:') !!}
{!! Form::text('price') !!}

{!! Form::submit('Save', '', array('class' => 'form-control')) !!}
{!! Form::close() !!}