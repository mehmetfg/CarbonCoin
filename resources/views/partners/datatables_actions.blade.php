
<div class='btn-group'>

    {!! Form::open(['route' => ['partners.destroy', $id], 'method' => 'delete']) !!}
    <a href="{{ route('powerStations.create', ["id"=> $id]) }}" class='btn btn-primary btn-sm' title="Yek Ekle">
        <i class="fa fa-eject"></i>
    </a>
    <a href="{{ route('vallets.create', ["id"=> $id]) }}" class='btn btn-primary btn-sm'>
        <i class="fa fa-vcard"></i>
    </a>
    <a href="{{ route('partners.show', $id) }}" class='btn btn-warning-gradien btn-sm'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('partners.edit', $id) }}" class='btn btn-danger-gradien btn-sm'>
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
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <input type="hidden" name="admin_id" value="{{auth()->id()}}">
            <button  class="btn-info  btn-xs ">     <i class="fa fa-sign-out"></i></button>
        </form>

    @endif
</div>

