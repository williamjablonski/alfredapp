<div class="table-responsive well well-sm">
    <table id="pedidos" class="table table-condensed">
        <thead class="bg-primary">
            <tr>
            	<th width=""></th>                              
                <th width="20">Nº</th>   
                <th width="80">Data</th>
                <th>Cliente</th>                
                <th>Fornecedor</th>
                <th width="120" align="right">Total</th>                
                <th width="160" align="right"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                @include('pedidos.item')
            @endforeach                   
            <?php // print_r($pedidos); exit; ?>
        </tbody>
    </table>

</div>

@section('scripts')
<script>
    jQuery(document).ready(function($) {
        $('#pedidos').dynatable();
    });
</script>
@stop