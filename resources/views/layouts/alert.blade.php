
<?php



if(session("success")){

?>

<script>
    swal({
        position: 'center',
        type: 'success',
        title: '{{__("labels.İşlem Başarılı")}}',
        text: '{{session("success")}}',
        showConfirmButton: false,
        timer: 2000
    })

</script>

<?php } if(session("error")) { ?>

<script>
    swal({
        position: 'left',
        type: 'error',
        title: '{{__("labels.İşlem Başarısız")}}',
        text: '{{session("error")}}',
        showConfirmButton: false,
        timer: 2000
    })
</script>

<?php
} ?>
<script>

    @if(intval(session("credit"))<=0)
    $(".remove-ower").hide();
    $(".message-alert").show();
    @else
    $(".remove-ower").show();
    $(".message-alert").hide();
    @endif
</script>
