
<a href='/user/create'>Novo Usuário</a>
<table class='tabelausuarios'>

<thead>
    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha (Cript)</th>        
        <th>Token</th>
        <th colspan=2>Operações</th>
    </tr>
</thead>

<tbody>
    <?php foreach($table as $linha): ?> 
    <tr>
        <td>#<?php echo $linha->id ?></td>
        <td><?php echo $linha->username ?></td>
        <td><?php echo $linha->password  ?></td>        
        <td><?php echo $linha->token ?></td>
        <td><a href="/user/edit/<?php echo  $linha->id?>"> Alterar </a></td>
        <td><a href="/user/destroy/<?php echo  $linha->id?>"> Excluir </a></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>    