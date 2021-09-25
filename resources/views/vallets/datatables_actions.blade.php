{!! Form::open(['route' => ['vallets.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('powerStations.create', ['id'=> $id]) }}" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('vallets.show', $id) }}" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('vallets.edit', $id) }}" class='btn btn-primary btn-sm'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa  fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-sm',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]) !!}
</div>
{!! Form::close() !!}
