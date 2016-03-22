<?php

$clientes = array(
    0 => array(id=>1, nome=>"Cliente1", endereco=>"Endereco Cliente1", cidade=>"Cidade Cliente1", estado=>"SP", cpf=>"111.111.111-11", telefone=>"1111-1111", email=>"cliente1@cliente1.com"),
    1 => array(id=>2, nome =>"Cliente2", endereco=>"Endereco Cliente2", cidade=>"Cidade Cliente2", estado=>"SP", cpf=>"222.222.222-22", telefone=>"2222-2222", email=>"cliente2@cliente2.com"),
    2 => array(id=>3, nome =>"Cliente3", endereco=>"Endereco Cliente3", cidade=>"Cidade Cliente3", estado=>"RJ", cpf=>"333.333.333-33", telefone=>"3333-3333", email=>"cliente3@cliente3.com"),
    3 => array(id=>4, nome =>"Cliente4", endereco=>"Endereco Cliente4", cidade=>"Cidade Cliente4", estado=>"MG", cpf=>"444.444.444-44", telefone=>"4444-4444", email=>"cliente4@cliente4.com"),
    4 => array(id=>5, nome =>"Cliente5", endereco=>"Endereco Cliente5", cidade=>"Cidade Cliente5", estado=>"PE", cpf=>"555.555.555-55", telefone=>"5555-5555", email=>"cliente5@cliente5.com"),
    5 => array(id=>6, nome =>"Cliente6", endereco=>"Endereco Cliente6", cidade=>"Cidade Cliente6", estado=>"ES", cpf=>"666.666.666-66", telefone=>"6666-6666", email=>"cliente6@cliente6.com"),
    6 => array(id=>7, nome =>"Cliente7", endereco=>"Endereco Cliente7", cidade=>"Cidade Cliente7", estado=>"MT", cpf=>"777.777.777-77", telefone=>"7777-7777", email=>"cliente7@cliente7.com"),
    7 => array(id=>8, nome =>"Cliente8", endereco=>"Endereco Cliente8", cidade=>"Cidade Cliente8", estado=>"AC", cpf=>"888.888.888-88", telefone=>"8888-8888", email=>"cliente8@cliente8.com"),
    8 => array(id=>9, nome =>"Cliente9", endereco=>"Endereco Cliente9", cidade=>"Cidade Cliente9", estado=>"SP", cpf=>"999.999.999-99", telefone=>"9999-9999", email=>"cliente9@cliente9.com"),
    9 => array(id=>10, nome =>"Cliente10", endereco=>"Endereco Cliente10", cidade=>"Cidade Cliente10", estado=>"RJ", cpf=>"000.000.000-00", telefone=>"0000-0000", email=>"cliente0@cliente0.com")
);

if(isset($_POST["asc"])) krsort($clientes);

if(isset($_POST["desc"])) ksort($clientes);

require_once ('header.php');

?>

<button type="submit" value="asc" name="asc" class="btn btn-primary">Ascendente</button>
<button type="submit" value="desc" name="desc" class="btn btn-primary">Descendente</button>

<div class="modal fade bs-example-modal-lg" id="teste" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cliente</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" value="">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço" value="">
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" placeholder="Cidade" value="">
                </div>
                <div class="form-group">
                    <label for="uf">UF</label>
                    <input type="text" class="form-control" id="estado" placeholder="UF" value="">
                </div>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="CPF" value="">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="telefone" class="form-control" id="telefone" placeholder="Telefone" value="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" value="">
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Cidade</th>
        <th>UF</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Email</th>
        <th></th>
    </tr>
    <?php
        foreach ($clientes as $cliente)
        {
            echo '<tr>';
                echo '<td>' . $cliente['nome'] . '</td>';
                echo '<td>' . $cliente['endereco'] . '</td>';
                echo '<td>' . $cliente['cidade'] . '</td>';
                echo '<td>' . $cliente['estado'] . '</td>';
                echo '<td>' . $cliente['cpf'] . '</td>';
                echo '<td>' . $cliente['telefone'] . '</td>';
                echo '<td>' . $cliente['email'] . '</td>';
                echo '<td><a data-toggle="modal"
                data-id="' . $cliente["id"] . '"
                data-nome="' . $cliente["nome"] . '"
                data-endereco="' . $cliente["endereco"] . '"
                data-cidade="' . $cliente["cidade"] . '"
                data-estado="' . $cliente["estado"] . '"
                data-cpf="' . $cliente["cpf"] . '"
                data-telefone="' . $cliente["telefone"] . '"
                data-email="' . $cliente["email"] . '"
                href="#bs-example-modal-lg" id="btn" class="btn btn-primary btn-lg active" role="button">Visualizar</a></td>';
            echo '</tr>';
        }
    ?>
    <script>

        $(document).on("click", "#btn", function () {

            var id = $(this).data('id');
            var nome = $(this).data('nome');
            var endereco = $(this).data('endereco');
            var cidade = $(this).data('cidade');
            var estado = $(this).data('estado');
            var cpf = $(this).data('cpf');
            var telefone = $(this).data('telefone');
            var email = $(this).data('email');

            $(".modal-body #Id").val(id);
            $(".modal-body #nome").val(nome);
            $(".modal-body #endereco").val(endereco);
            $(".modal-body #cidade").val(cidade);
            $(".modal-body #estado").val(estado);
            $(".modal-body #cpf").val(cpf);
            $(".modal-body #telefone").val(telefone);
            $(".modal-body #email").val(email);
            $("#teste").modal('show');

        });

    </script>

</table>

<?php require_once ('footer.php'); ?>