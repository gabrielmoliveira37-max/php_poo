<?php

interface INotificador {
    public function enviar($destinatario, $mensagem);
}

// Implementar: E-mail
class  NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: SMS
class NotificadorSMS implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo"Whatsapp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}