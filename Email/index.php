<?php 

require_once("vendor/autoload.php");

/**
 * Este exemplo mostra as configurações a serem usadas ao enviar via servidores Gmail.
 * Isso usa autenticação tradicional com ID e senha - veja o exemplo gmail_xoauth.phps
 * para ver como usar o XOAUTH2.
 * A seção IMAP mostra como salvar esta mensagem na pasta 'Itens Enviados' usando comandos IMAP.
 */

// Importar classes PHPMailer para o namespace global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Criar uma nova instância PHPMailer
$mail = new PHPMailer();

// Dizer ao PHPMailer para usar SMTP
$mail->isSMTP();

// Ativar depuração SMTP
// SMTP::DEBUG_OFF = off (para uso em produção)
// SMTP::DEBUG_CLIENT = mensagens do cliente
// SMTP::DEBUG_SERVER = mensagens do cliente e do servidor
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

// Definir o nome do host do servidor de email
$mail->Host = 'smtp.gmail.com';
// Use `$mail->Host = gethostbyname('smtp.gmail.com');`
// se sua rede não suportar SMTP sobre IPv6,
// embora isso possa causar problemas com TLS

// Definir o número da porta SMTP:
// - 465 para SMTP com TLS implícito, também conhecido como RFC8314 SMTPS ou
// - 587 para SMTP+STARTTLS
$mail->Port = 465;

// Definir o mecanismo de criptografia a ser usado:
// - SMTPS (TLS implícito na porta 465) ou
// - STARTTLS (TLS explícito na porta 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

// Se deve usar autenticação SMTP
$mail->SMTPAuth = true;

// Nome de usuário a ser usado para autenticação SMTP - use o endereço de email completo para Gmail
$mail->Username = 'exemplo@gmail.com';

// Senha a ser usada para autenticação SMTP
$mail->Password = '123456789';

// Definir quem a mensagem deve ser enviada
// Note que com o Gmail você só pode usar o endereço da sua conta (o mesmo que `Username`)
// ou aliases predefinidos que você configurou dentro da sua conta.
// Não use endereços enviados pelo usuário aqui
$mail->setFrom('exemplo@gmail.com', 'Curso de PHP 7');

// Definir um endereço de resposta alternativo
// Este é um bom lugar para colocar endereços enviados pelo usuário
//$mail->addReplyTo('replyto@example.com', 'Primeiro Último');

// Definir quem a mensagem deve ser enviada
$mail->addAddress('exemplo2@gmail.com', 'John Doe');

// Definir a linha do assunto
$mail->Subject = 'Testando a classe PHPMailer com Gmail';

// Ler um corpo de mensagem HTML de um arquivo externo, converter imagens referenciadas em incorporadas,
// converter HTML em um corpo alternativo básico em texto simples
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

// Substituir o corpo de texto simples por um criado manualmente
$mail->AltBody = 'Este é um corpo de mensagem em texto simples.';

// Anexar um arquivo de imagem
//$mail->addAttachment('images/phpmailer_mini.png');

// enviar a mensagem, verificar se há erros
if (!$mail->send()) {
    echo 'Erro no Mailer: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada!';
    // Seção 2: IMAP
    // Descomente isso para salvar sua mensagem na pasta 'Itens Enviados'.
    #if (save_mail($mail)) {
    #    echo "Mensagem salva!";
    #}
}

// Seção 2: IMAP
// Comandos IMAP requerem a extensão IMAP do PHP, encontrada em: https://php.net/manual/pt/imap.setup.php
// Função a ser chamada que usa as funções imap_*() do PHP para salvar mensagens: https://php.net/manual/pt/book.imap.php
// Você pode usar imap_getmailboxes($imapStream, '/imap/ssl', '*' ) para obter uma lista de pastas ou etiquetas disponíveis, isso pode
// ser útil se você estiver tentando fazer isso em um servidor IMAP que não seja o Gmail.
function save_mail($mail)
{
    // Você pode mudar 'Itens Enviados' para qualquer outra pasta ou etiqueta
    $path = '{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail';

    // Dizer ao seu servidor para abrir uma conexão IMAP usando o mesmo nome de usuário e senha que você usou para SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}
?>
