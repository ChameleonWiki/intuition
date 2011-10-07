<?php
/**
 * Interface messages for the ToolserverStatus class.
 *
 * @toolowner platonides
 */

/* This is a library, there is no public url */
$url = null;

$messages = array();

/**
 * English
 *
 * @author Platonides
 */
$messages['en'] = array(
	'toolserver-status-ok' => 'There are no problems in database cluster $1 $2',
	'toolserver-status-info' => 'Notice for users of cluster $1: $2',
	'toolserver-status-warn' => 'Warning for users of cluster $1: $2',
	'toolserver-status-down' => 'The database cluster $1 has been temporarily shutdown. $2',
	'toolserver-status-erro' => 'The database cluster $1 is down. $2',
	'toolserver-status-unknown' => 'Unknown status of cluster $1',
	'toolserver-status-missing' => 'Cluster $1 does not exist',

	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Warn',
	'toolserver-status-short-down' => '$1: Down',
	'toolserver-status-short-erro' => '$1: Error',
	'toolserver-status-short-unknown' => '$1: Unknown',
	'toolserver-status-short-missing' => '$1: Missing',
);

/** Message documentation (Message documentation)
 * @author Platonides
 */
$messages['qqq'] = array(
	'toolserver-status-ok' => "Message formatting for when the cluster status is 'ok'. Params: cluster ($1) and informative text ($2), which should be empty",
	'toolserver-status-info' => "Message formatting for when the cluster status is 'info'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-warn' => "Message formatting for when the cluster status is 'warn'. Params: cluster ($1) and informative text ($2)",
	'toolserver-status-down' => "Message formatting for when the cluster status is 'down' (eg. a planned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-erro' => "Message formatting for when the cluster status is 'erro' (eg. a unplanned maintenance). Params: cluster ($1) and informative text ($2)",
	'toolserver-status-unknown' => "Message formatting for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster ($1) and empty informative text ($2)",
	'toolserver-status-missing' => "Message formatting for when the cluster name doesn't exist (invalid name passed by the calling program)",
	'toolserver-status-short-ok' => "A short status text for when the status is 'ok'. Params: cluster name ($1)",
	'toolserver-status-short-info' => "A short status text for when the status is 'info'. Params: cluster name ($1)",
	'toolserver-status-short-warn' => "A short status text for when the status is 'warn'. Params: cluster name ($1)",
	'toolserver-status-short-down' => "A short status text for when the status is 'down'. Params: cluster name ($1)",
	'toolserver-status-short-erro' => "A short status text for when the status is 'erro'. Params: cluster name ($1)",
	'toolserver-status-short-unknown' => "A short status text for when the status file doesn't deliver any information about the status (a toolserver admin wrote it wrong). Params: cluster name ($1)",
	'toolserver-status-short-missing' => "A short status text for when the cluster name doesn't exist (invalid name passed by the calling program)",
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'toolserver-status-ok' => 'Няма ніякіх праблемаў у клястэры базы зьвестак $1 $2',
	'toolserver-status-info' => 'Паведамленьне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-warn' => 'Папярэджаньне для карыстальнікаў клястэра $1: $2',
	'toolserver-status-down' => 'Клястэр базы зьвестак $1 быў часовы адключаны. $2',
	'toolserver-status-erro' => 'Клястэр базы зьвестак $1 ня дзейнічае. $2',
	'toolserver-status-unknown' => 'Невядомы статус клястэру $1',
	'toolserver-status-missing' => 'Клястэр $1 не існуе',
	'toolserver-status-short-ok' => '$1: Добра',
	'toolserver-status-short-info' => '$1: Інфармацыя',
	'toolserver-status-short-warn' => '$1: Папярэджаньне',
	'toolserver-status-short-down' => '$1: Ня дзейнічае',
	'toolserver-status-short-erro' => '$1: Памылка',
	'toolserver-status-short-unknown' => '$1: Невядомая',
	'toolserver-status-short-missing' => '$1: Адсутнічае',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'toolserver-status-ok' => 'Es gibt keine Probleme im Datenbankcluster $1 $2',
	'toolserver-status-info' => 'Information für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-warn' => 'Warnung für die Benutzer des Datenbankclusters $1: $2',
	'toolserver-status-down' => 'Die Datenbankcluster $1 wurde vorübergehend herunterfahren. $2',
	'toolserver-status-erro' => 'Der Datenbankcluster $1 ist ausgefallen. $2',
	'toolserver-status-unknown' => 'Der Status des Datenbankclusters $1 ist unbekannt.',
	'toolserver-status-missing' => 'Der Datenbankcluster $1 ist nicht vorhanden.',
	'toolserver-status-short-ok' => '$1: In Ordnung',
	'toolserver-status-short-info' => '$1: Information',
	'toolserver-status-short-warn' => '$1: Warnung',
	'toolserver-status-short-down' => '$1: Heruntergefahren',
	'toolserver-status-short-erro' => '$1: Ausgefallen',
	'toolserver-status-short-unknown' => '$1: Unbekannt',
	'toolserver-status-short-missing' => '$1: Nicht vorhanden',
);

/** French (Français)
 * @author Od1n
 */
$messages['fr'] = array(
	'toolserver-status-missing' => 'Le cluster $1 n’existe pas',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'toolserver-status-ok' => 'Non hai ningún problema no clúster da base de datos $1 $2',
	'toolserver-status-info' => 'Nota aos usuarios do clúster $1: $2',
	'toolserver-status-warn' => 'Aviso aos usuarios do clúster $1: $2',
	'toolserver-status-down' => 'O clúster $1 da base de datos está pechado temporalmente. $2',
	'toolserver-status-erro' => 'O clúster $1 da base de datos está caído. $2',
	'toolserver-status-unknown' => 'Descoñécese o estado do clúster $1',
	'toolserver-status-missing' => 'O clúster "$1" non existe',
	'toolserver-status-short-ok' => '$1: Ben',
	'toolserver-status-short-info' => '$1: Información',
	'toolserver-status-short-warn' => '$1: Aviso',
	'toolserver-status-short-down' => '$1: Pechado',
	'toolserver-status-short-erro' => '$1: Erro',
	'toolserver-status-short-unknown' => '$1: Descoñecido',
	'toolserver-status-short-missing' => '$1: Inexistente',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'toolserver-status-ok' => 'Mer han kein Probleeme em Daatebank-Knubbel $1 $2',
	'toolserver-status-info' => 'Henwieß för der Jebruch vom Daatebank-Knubbel $1: $2',
	'toolserver-status-warn' => 'Warnong för der Zohjreff op dä Daatebank-Knubbel $1: $2',
	'toolserver-status-down' => 'Dä Daatebank-Knubbel $1 wood för en Zigg eronger jefahre. $2',
	'toolserver-status-erro' => 'Dä Daatebank-Knubbel $1 es eronger jefahre, $2',
	'toolserver-status-unknown' => 'Mer han kein Aanjaabe övver dä Daatebank-Knubbel $1',
	'toolserver-status-missing' => 'Ene Daatebank-Knubbel $1 jidd_et nit.',
	'toolserver-status-short-ok' => '$1: Alles joot.',
	'toolserver-status-short-info' => '$1: Henwieß.',
	'toolserver-status-short-warn' => '$1: Oppaße!',
	'toolserver-status-short-down' => '$1: Läuf nit.',
	'toolserver-status-short-erro' => '$1: Fähler.',
	'toolserver-status-short-unknown' => '$1: Nit klohr.',
	'toolserver-status-short-missing' => '$1: Ham_mer nit.',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'toolserver-status-ok' => 'Нема проблеми во гроздот $1 во базата $2',
	'toolserver-status-info' => 'Напомена за корисниците на гроздот $1: $2',
	'toolserver-status-warn' => 'Предупредување за корисниците на гроздот $1: $2',
	'toolserver-status-down' => 'Гроздот $1 во базата привремено е исклучен. $2',
	'toolserver-status-erro' => 'Гроздот $1 на базата падна. $2',
	'toolserver-status-unknown' => 'Состојбата на гроздот $1 е непозната',
	'toolserver-status-missing' => 'Гроздот $1 не постои',
	'toolserver-status-short-ok' => '$1: Во ред',
	'toolserver-status-short-info' => '$1: Инфо',
	'toolserver-status-short-warn' => '$1: Предупредување',
	'toolserver-status-short-down' => '$1: Паднат',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостасува',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'toolserver-status-ok' => 'Tiada masalah dalam kelompok pangkalan data $1 $2',
	'toolserver-status-info' => 'Pemberitahuan untuk pengguna kelompok $1 : $2',
	'toolserver-status-warn' => 'Amaran untuk pengguna kelompok $1 : $2',
	'toolserver-status-down' => 'Kelompok pangkalan data $1 telah ditutup buat sementara waktu. $2',
	'toolserver-status-erro' => 'Kelompok pangkalan data $1 tergendala. $2',
	'toolserver-status-unknown' => 'Status kelompok $1 tidak diketahui.',
	'toolserver-status-missing' => 'Kelompok $1 tidak wujud',
	'toolserver-status-short-ok' => '$1: Ok',
	'toolserver-status-short-info' => '$1: Maklumat',
	'toolserver-status-short-warn' => '$1: Amaran',
	'toolserver-status-short-down' => '$1: Tergendala',
	'toolserver-status-short-erro' => '$1: Ralat',
	'toolserver-status-short-unknown' => '$1: Tidak diketahui',
	'toolserver-status-short-missing' => '$1: Tiada',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 */
$messages['nl'] = array(
	'toolserver-status-ok' => 'Er zijn geen problemen in de databasecluster $1 $2',
	'toolserver-status-info' => 'Kennisgeving voor gebruikers van cluster $1: $2',
	'toolserver-status-warn' => 'Waarschuwing voor gebruikers van cluster $1: $2',
	'toolserver-status-unknown' => 'Onbekend status van cluster $1',
	'toolserver-status-missing' => 'Cluster $1 bestaat niet',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Info',
	'toolserver-status-short-warn' => '$1: Waarschuwing',
	'toolserver-status-short-erro' => '$1: Foutmelding',
	'toolserver-status-short-unknown' => '$1: Onbekend',
	'toolserver-status-short-missing' => '$1: Ontbrekend',
);

/** Polish (Polski)
 * @author Grzechooo
 */
$messages['pl'] = array(
	'toolserver-status-ok' => 'Nie ma żadnych problemów w klastrze bazy danych $1 $2',
	'toolserver-status-info' => 'Wiadomość dla użytkowników klastra $1: $2',
	'toolserver-status-warn' => 'Ostrzeżenie dla użytkowników klastra $1: $2',
	'toolserver-status-down' => 'Klaster bazy danych $1 został tymczasowo wyłączony. $2',
	'toolserver-status-erro' => 'Klaster bazy danych $1 nie działa. $2',
	'toolserver-status-unknown' => 'Nieznany status klastra $1',
	'toolserver-status-missing' => 'Klaster $1 nie istnieje',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Informacje',
	'toolserver-status-short-warn' => '$1: Ostrzeżenie',
	'toolserver-status-short-down' => '$1: Nie działa',
	'toolserver-status-short-erro' => '$1: Błąd',
	'toolserver-status-short-unknown' => '$1: Nieznany',
	'toolserver-status-short-missing' => '$1: Brak',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'toolserver-status-ok' => 'Нема проблема у кластеру базе података $1 $2',
	'toolserver-status-info' => 'Напомена за кориснике кластера $1: $2',
	'toolserver-status-warn' => 'Упозорење за кориснике кластера $1: $2',
	'toolserver-status-down' => 'Кластер базе података $1 је привремено искључен. $2',
	'toolserver-status-erro' => 'Кластер базе података $1 је изненадно пао. $2',
	'toolserver-status-unknown' => 'Непознато стање кластера $1',
	'toolserver-status-missing' => 'Кластер $1 не постоји',
	'toolserver-status-short-ok' => '$1: У реду',
	'toolserver-status-short-info' => '$1: Подаци',
	'toolserver-status-short-warn' => '$1: Напомена',
	'toolserver-status-short-down' => '$1: Пад',
	'toolserver-status-short-erro' => '$1: Грешка',
	'toolserver-status-short-unknown' => '$1: Непознато',
	'toolserver-status-short-missing' => '$1: Недостаје',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'toolserver-status-ok' => 'Nema problema u klasteru baze podataka $1 $2',
	'toolserver-status-info' => 'Napomena za korisnike klastera $1: $2',
	'toolserver-status-warn' => 'Upozorenje za korisnike klastera $1: $2',
	'toolserver-status-down' => 'Klaster baze podataka $1 je privremeno isključen. $2',
	'toolserver-status-erro' => 'Klaster baze podataka $1 je iznenadno pao. $2',
	'toolserver-status-unknown' => 'Nepoznato stanje klastera $1',
	'toolserver-status-missing' => 'Klaster $1 ne postoji',
	'toolserver-status-short-ok' => '$1: U redu',
	'toolserver-status-short-info' => '$1: Podaci',
	'toolserver-status-short-warn' => '$1: Napomena',
	'toolserver-status-short-down' => '$1: Pad',
	'toolserver-status-short-erro' => '$1: Greška',
	'toolserver-status-short-unknown' => '$1: Nepoznato',
	'toolserver-status-short-missing' => '$1: Nedostaje',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'toolserver-status-ok' => 'Không có vấn đề trong cụm cơ sở dữ liệu $1 $2',
	'toolserver-status-info' => 'Thông báo cho những người dùng cụm $1: $2',
	'toolserver-status-warn' => 'Cảnh báo cho những người dùng cụm $1: $2',
	'toolserver-status-down' => 'Cụm cơ sở dữ liệu $1 đã bị tắt tạm thời. $2',
	'toolserver-status-erro' => 'Cụm cơ sở dữ liệu $1 đang tắt: $2',
	'toolserver-status-unknown' => 'Trạng thái của cụm $1 không rõ',
	'toolserver-status-missing' => 'Cụm $1 không tồn tại',
	'toolserver-status-short-ok' => '$1: OK',
	'toolserver-status-short-info' => '$1: Thông báo',
	'toolserver-status-short-warn' => '$1: Cảnh báo',
	'toolserver-status-short-down' => '$1: Tắt',
	'toolserver-status-short-erro' => '$1: Lỗi',
	'toolserver-status-short-unknown' => '$1: Không rõ',
	'toolserver-status-short-missing' => '$1: Không có',
);
