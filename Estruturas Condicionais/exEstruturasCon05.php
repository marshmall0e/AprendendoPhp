<?php 

#Este código gera um menu suspenso HTML (<select>) contendo opções de anos, começando pelo ano atual e retrocedendo até 100 anos atrás. Utilizando um loop for, ele itera de date("Y") até date("Y")-100, imprimindo cada ano como um <option> no formato value, que corresponde ao próprio ano. Essa estrutura é útil para permitir que os usuários selecionem um ano de forma intuitiva em formulários web.

echo "<select>";

for ($i = date("Y"); $i > date("Y")-100; $i--) {
    echo '<option value="'. $i . '">' . $i . '</option>';
}

echo "</select>";
?>