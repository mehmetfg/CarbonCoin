
<div class='btn-group'>
    {!! Form::open(['route' => ['customers.destroy', $id], 'method' => 'delete']) !!}
    <a href="{{ route('customers.show', $id) }}" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('customers.edit', $id) }}" class='btn btn-danger-gradien btn-sm'>
        <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa  fa-trash"></i>', [
        'type' => 'submit',
         'class' => ' btn-info btn-xs',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]) !!}
    {!! Form::close() !!}

    @if(Auth::user()->type=="1")
        <form  action="{{route("impersonate.login")}}"  method="post">
            <div class='btn-group'>
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <input type="hidden" name="admin_id" value="{{auth()->id()}}">
                <button  class="btn-info  btn-xs ">     <i class="fa fa-sign-out"></i></button>
            </div>
        </form>


    @endif
</div>

