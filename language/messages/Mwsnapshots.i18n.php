<?php
/**
 * Interface messages for tool "mwSnapshots".
 *
 * @toolowner krinkle
 */

$url = '~krinkle/mwSnapshots/';

$messages = array();

/**
 * English
 *
 * @author Krinkle
 */
$messages['en'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Error',
	'title-updatelog' => 'Update log',
	'updatelog-intro' => 'The update script is scheduled to run every hour. Below is the console output of the last run.',
	'updatelog-active' => 'The update script is currently running. Come back later for the complete log.',
	'title-download' => '$1', // Do not translate
	'download-button' => 'Download $1', 
	'download-directlink' => 'direct link',
	'title-downloadpage' => 'Download: $1',
	'downloadpage-directlink' => 'Click here to download the snapshot.',
	'err-snapshotindex' => 'Snapshot index temporarily unavailable. Please try again later.',
	'err-invalid-repo' => 'Unknown repository: "$1".',
	'err-invalid-branch' => 'Unknown branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'The snapshots are generated every few hours. While generating the snapshot for "$1", an error occurred. Please try again later.',
	'err-noupdatelog' => 'No update log was found.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Browse repository',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => 'Get it!',
	'updatelog-link' => 'update log',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'File size',
	'tablehead-hash' => 'Checksums',
);

/** Message documentation (Message documentation)
 * @author Krinkle
 * @author Siebrand
 * @author Toliño
 */
$messages['qqq'] = array(
	'title-overview' => 'Heading of overview page listing all repositories and branches',
	'title-error' => 'Heading of page if action failed',
	'download-button' => 'Label of the download button. Text is outputted below an down-arrow.

* $1: Branch name',
	'download-directlink' => 'Link displayed in parentheses below the download button.',
	'title-downloadpage' => 'Heading of download page where the file is ready to be downloaded by the user

* $1: File name',
	'downloadpage-directlink' => 'Clickable link shown under the heading, links to the file directly',
	'err-snapshotindex' => 'If the information manifest (Index) can not be found on the server, this error is shown.',
	'err-invalid-repo' => '

* $1: Repository name',
	'err-invalid-branch' => 'Parameters:
* $1: Branch name
* $2: Repository name',
	'err-nosnapshot' => 'The snapshots are generated every few hours. If during the generation the selected branch had a problem. Then trying to download it will show this error.

* $1: Branch name',
);

/** Asturian (Asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'title-overview' => 'Instantánees',
	'title-error' => 'Error',
	'title-updatelog' => "Rexistru d'anovamientu",
	'updatelog-intro' => "El script d'anovamientu ta programáu pa executase cada hora. Más abaxo ta la salida de terminal de la cabera execución.",
	'updatelog-active' => "El script d'anovamientu ta executandose anguaño. Torna más sero pa ver el rexistru completu.",
	'err-snapshotindex' => "L'índiz de instantánees nun ta disponible temporalmente. Intentalo otra vuelta más sero.",
	'err-invalid-repo' => 'Repositoriu desconocíu: «$1».',
	'err-invalid-branch' => 'Rama desconocida: «$1» nel repositoriu «$2».',
	'err-nosnapshot' => 'Les instantánees xenerense cada poques hores. Al xenerar la instantánea pa «$1» hebo un error. Intentalo otra vuelta más sero.',
	'err-noupdatelog' => "Nun s'alcontró dengún rexistru de anovamientu.",
	'repo-site-link' => 'Sitiu web',
	'repo-browse-link' => 'Esaminar el repositoriu',
	'repo-branches-label' => 'Rames:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => '¡Consiguilo!',
	'updatelog-link' => "rexistru d'anovamientu",
	'tablehead-repo' => 'Repositoriu',
	'tablehead-snapshots' => 'Instantánees',
	'tablehead-branch' => 'Rama',
	'tablehead-filesize' => 'Tamañu del ficheru',
	'tablehead-hash' => 'Sumes de comprobación',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'title-overview' => 'Schnappschüsse',
	'title-error' => 'Fehler',
	'title-updatelog' => 'Aktualisierungsprotokoll',
	'updatelog-intro' => 'Das Aktualisierungsskript wird einmal pro Stunde ausgeführt. Hier kann man Informationen zur letzten Ausführung des Skripts einsehen.',
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuche diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'download-button' => '$1 herunterladen',
	'download-directlink' => 'direkter Link',
	'title-downloadpage' => 'Herunterladen von $1',
	'downloadpage-directlink' => 'Hier klicken, um den Schnappschuss herunterzuladen.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuche es später erneut.',
	'err-invalid-repo' => 'Unbekanntes Repositorium: „$1“',
	'err-invalid-branch' => 'Unbekannter Versionszweig: „$1“ im Repositorium „$2“.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuche es später erneut.',
	'err-noupdatelog' => 'Das Aktualisierungsprotokoll wurde nicht gefunden.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repositorium durchsuchen',
	'repo-branches-label' => 'Versionszweige:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Herunterladen',
	'updatelog-link' => 'Aktualisierungsprotokoll',
	'tablehead-repo' => 'Repositorium',
	'tablehead-snapshots' => 'Schnappschüsse',
	'tablehead-branch' => 'Versionszweig',
	'tablehead-filesize' => 'Dateigröße',
	'tablehead-hash' => 'Hash',
);

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'updatelog-active' => 'Das Aktualisierungsskript wird derzeit ausgeführt. Besuchen Sie diese Seite später noch einmal, um das vollständige Protokoll einsehen zu können.',
	'err-snapshotindex' => 'Der Schnappschussindex ist vorübergehend nicht verfügbar. Bitte versuchen Sie es später erneut.',
	'err-nosnapshot' => 'Die Schnappschüsse werden alle paar Stunden generiert. Beim Generieren des Schnappschusses für „$1“ ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'download-button' => "$1'i Ron",
	'title-downloadpage' => "$1'i Ron:",
	'repo-site-link' => 'Websita',
	'repo-lastmoddate-label' => 'Wext:',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'title-overview' => 'Njezjapke bildki',
	'title-error' => 'Zmólka',
	'title-updatelog' => 'Aktualizěrowański protokol',
	'updatelog-intro' => 'Aktualizěrowański skript wuwjeźo se kuždu góźinu. Dołojce jo wudaśe konsole za slědny běg.',
	'updatelog-active' => 'Aktualizěrowański skript tuchylu běžy. Wroś se pšosym pózdźej, aby se dopołny protokol woglědał.',
	'download-button' => '$1 ześěgnuś',
	'download-directlink' => 'direktny wótkaz',
	'title-downloadpage' => 'Ześěgnjenje: $1',
	'downloadpage-directlink' => 'Klikni how, aby njezjapku bildku ześěgnuł.',
	'err-snapshotindex' => 'Indeks njezjapkich bildkow njestoj k dispoziciji. Pšosym wopytaj pózdźej hyšći raz.',
	'err-invalid-repo' => 'Njeznaty repozitorium: "$1".',
	'err-invalid-branch' => 'Njeznata gałuza: "$1" w repozitoriumje "$2".',
	'err-nosnapshot' => 'Njezjapka bildka generěrujo se kužde pór góźin. Za generěrowanje njezjapkeje bildki za "$1" jo zmólka nastała. Pšosym wopytaj pózdźej hyšći raz.',
	'err-noupdatelog' => 'Aktualizowański protokol njejo se namakał.',
	'repo-site-link' => 'Websedło',
	'repo-browse-link' => 'Repozitorium pśepytaś',
	'repo-branches-label' => 'Gałuzki:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Ześěgnuś',
	'updatelog-link' => 'aktualizěrowański protokol',
	'tablehead-repo' => 'Repozitorium',
	'tablehead-snapshots' => 'Njezjapke bildki',
	'tablehead-branch' => 'Gałuza',
	'tablehead-filesize' => 'Wjelikosć dataje',
	'tablehead-hash' => 'Testowańske sumy',
);

/** Spanish (Español)
 * @author Armando-Martin
 * @author Invadinado
 */
$messages['es'] = array(
	'title-overview' => 'Instantáneas',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualización',
	'updatelog-intro' => 'La secuencia de comandos (script) de actualización está programada para ejecutarse cada hora. A continuación está el resultado de la consola tras la última ejecución.',
	'updatelog-active' => 'La secuencia de comandos (script) de actualización se está ejecutando actualmente. Vuelve más tarde para ver el registro completo.',
	'download-button' => 'Descargar $1',
	'download-directlink' => 'enlace directo',
	'title-downloadpage' => 'Descargar: $1',
	'downloadpage-directlink' => 'Haz clic aquí para descargar la instantánea.',
	'err-snapshotindex' => 'Índice de instantáneas no disponible temporalmente. Inténtalo de nuevo más tarde.',
	'err-invalid-repo' => 'Repositorio desconocido: "$1".',
	'err-invalid-branch' => 'Rama desconocida: "$1" en el repositorio "$2".',
	'err-nosnapshot' => 'Las instantáneas se generan cada pocas horas. Mientras se generaba la instantánea para "$1", se produjo un error. Inténtalo de nuevo más tarde.',
	'err-noupdatelog' => 'No se ha encontrado ningún registro de actualización.',
	'repo-site-link' => 'Sitio Web',
	'repo-browse-link' => 'Examinar el repositorio',
	'repo-branches-label' => 'Ramas:',
	'repo-lastmoddate-label' => 'Fecha:',
	'branches-submit-button' => '¡Consíguelo!',
	'updatelog-link' => 'registro de actualización',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantáneas',
	'tablehead-branch' => 'Rama',
	'tablehead-filesize' => 'Tamaño del archivo',
	'tablehead-hash' => 'Hash',
);

/** French (Français)
 * @author Gomoko
 * @author Tititou36
 */
$messages['fr'] = array(
	'title-overview' => 'Instantanés',
	'title-error' => 'Erreur',
	'title-updatelog' => 'Mettre à jour le journal',
	'updatelog-intro' => "Le script de mise à jour est programmé pour s'exécuter toutes les heures. Voici ci-dessous la sortie de la console de la dernière exécution.",
	'updatelog-active' => "Le script de mise à jour est en cours d'exécution. Revenez plus tard pour le journal complet.",
	'download-button' => 'Télécharger $1',
	'download-directlink' => 'lien direct',
	'title-downloadpage' => 'Télécharger : $1',
	'downloadpage-directlink' => 'Cliquez ici pour télécharger la copie.',
	'err-snapshotindex' => "Index d'instantané temporairement indisponible. Veuillez réessayer ultérieurement.",
	'err-invalid-repo' => 'Dépôt inconnu: "$1".',
	'err-invalid-branch' => 'Branche inconnue: "$1" dans le dépôt "$2".',
	'err-nosnapshot' => 'Les instantanés sont générés toutes les quelques heures. Lors de la génération de l\'instantané pour "$1", une erreur s\'est produite. Veuillez réessayer ultérieurement.',
	'err-noupdatelog' => "Aucun journal de mise à jour n'a été trouvé.",
	'repo-site-link' => 'Site web',
	'repo-browse-link' => 'Naviguer dans le dépôt',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Date:',
	'branches-submit-button' => "L'obtenir!",
	'updatelog-link' => 'mettre à jour le journal',
	'tablehead-repo' => 'Dépôt',
	'tablehead-snapshots' => 'Instantanés',
	'tablehead-branch' => 'Branche',
	'tablehead-filesize' => 'Taille de fichier',
	'tablehead-hash' => 'Hachage',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'title-overview' => 'Instantáneas',
	'title-error' => 'Erro',
	'title-updatelog' => 'Rexistro de actualizacións',
	'updatelog-intro' => 'A escritura de actualización está programada para executarse cada hora. A continuación está o resultado que mostrou a consola na última execución.',
	'updatelog-active' => 'A escritura de actualización está executándose nestes intres. Volva máis tarde para ollar o rexistro completo.',
	'download-button' => 'Descargar "$1"',
	'download-directlink' => 'ligazón directa',
	'title-downloadpage' => 'Descargar: $1',
	'downloadpage-directlink' => 'Prema aquí para descargar a instantánea.',
	'err-snapshotindex' => 'O índice de instantáneas non está dispoñible temporalmente. Inténteo de novo máis tarde.',
	'err-invalid-repo' => 'Repositorio descoñecido: "$1".',
	'err-invalid-branch' => 'Ramificación descoñecida: "$1" no repositorio "$2".',
	'err-nosnapshot' => 'As instantáneas xéranse cada poucas horas. Houbo un erro durante a xeración da instantánea de "$1". Inténteo de novo máis tarde.',
	'err-noupdatelog' => 'Non se atopou ningún rexistro de actualización.',
	'repo-site-link' => 'Páxina web',
	'repo-browse-link' => 'Explorar o repositorio',
	'repo-branches-label' => 'Ramificacións:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Obtéñao!',
	'updatelog-link' => 'rexistro de actualizacións',
	'tablehead-repo' => 'Repositorio',
	'tablehead-snapshots' => 'Instantáneas',
	'tablehead-branch' => 'Ramificación',
	'tablehead-filesize' => 'Tamaño do ficheiro',
	'tablehead-hash' => 'Sumas de verificación',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'title-overview' => 'קובצי מאגרים',
	'title-error' => 'שגיאה',
	'title-updatelog' => 'יומן עדכונים',
	'updatelog-intro' => 'תסריט עדכון מתוזמן לרוץ מדי שעה. להלן הפלט של הריצה האחרונה.',
	'updatelog-active' => 'תסריט העדכון רץ עכשיו. בואו בהמשך לראות את היומן המלא.',
	'download-button' => 'הורדת $1',
	'download-directlink' => 'קישור ישיר',
	'title-downloadpage' => 'הורדה: $1',
	'downloadpage-directlink' => 'לחצו כאן כדי להוריד את הקובץ.',
	'err-snapshotindex' => 'מפתח קובצי המאגרים אינו זמין כעת. נא לנסות מאוחר יותר.',
	'err-invalid-repo' => 'מאגר בלתי־יודע: „$1”.',
	'err-invalid-branch' => 'ענף בלתי־ידוע: „$1” במאגר „$2”.',
	'err-nosnapshot' => 'קובצי המאגרים מיוצרים מדי כמה שעות. בעת יצירת הקובץ עבור „$1” התרחשה שגיאה. נא לנסות שוב מאוחר יותר.',
	'err-noupdatelog' => 'לא נמצא יומן עדכון.',
	'repo-site-link' => 'אתר האינטרנט',
	'repo-browse-link' => 'עיון במאגר',
	'repo-branches-label' => 'ענפים:',
	'repo-lastmoddate-label' => 'תאריך:',
	'branches-submit-button' => 'לקבל את זה!',
	'updatelog-link' => 'יומן עדכון',
	'tablehead-repo' => 'מאגר',
	'tablehead-snapshots' => 'קובצי מאגרים',
	'tablehead-branch' => 'ענף',
	'tablehead-filesize' => 'גודל הקובץ',
	'tablehead-hash' => 'סיכומי ביקורת',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'title-overview' => 'Njejapke fota',
	'title-error' => 'Zmylk',
	'title-updatelog' => 'Aktualizowanski protokol',
	'updatelog-intro' => 'Aktualizowanski skript so kóždu hodźinu wuwjedźe. Deleka je wudaće konsole za posledni běh.',
	'updatelog-active' => 'Aktualizowanski skript tuchwilu běži. Wróć so prošu pozdźišo, zo by sej dospołny protokol wobhladał.',
	'download-button' => '$1 sćahnyć',
	'download-directlink' => 'direktny wotkaz',
	'title-downloadpage' => 'Sćehnjenje: $1',
	'downloadpage-directlink' => 'Klikń tu, zo by njejapke foto sćahnył',
	'err-snapshotindex' => 'Indeks njejapkich fotow nachwilu k dispoziciji njesteji. Prošu spytaj pozdźišo hišće raz.',
	'err-invalid-repo' => 'Njeznaty repozitorij: "$1".',
	'err-invalid-branch' => 'Njeznata hałuza: "$1" w repozitoriju "$2".',
	'err-nosnapshot' => 'Njejapke foto so kóžde por hodźin generuja. Za generowanje njejapkeho fota za "$1" je zmylk wustupił. Prošu spytaj pozdźišo hišće raz.',
	'err-noupdatelog' => 'Aktualizowanski protokol njeje so namakał.',
	'repo-site-link' => 'Websydło',
	'repo-browse-link' => 'Repozitorij přepytać',
	'repo-branches-label' => 'Hałuzy:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Sćahnyć',
	'updatelog-link' => 'aktualizowanski protokol',
	'tablehead-repo' => 'Repozitorij',
	'tablehead-snapshots' => 'Njejapke fota',
	'tablehead-branch' => 'Hałuza',
	'tablehead-filesize' => 'Wulkosć dataje',
	'tablehead-hash' => 'Hash',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'title-overview' => 'Instantaneos',
	'title-error' => 'Error',
	'title-updatelog' => 'Registro de actualisation',
	'updatelog-intro' => 'Le script de actualisation es programmate pro esser executate cata hora. Ecce le resultato de consola del ultime execution.',
	'updatelog-active' => 'Le script de actualisation es actualmente in execution. Reveni plus tarde pro le registro complete.',
	'download-button' => 'Discargar $1',
	'download-directlink' => 'ligamine directe',
	'title-downloadpage' => 'Discargar: $1',
	'downloadpage-directlink' => 'Clicca hic pro discargar le instantaneo.',
	'err-snapshotindex' => 'Indice de instantaneos temporarimente indisponibile. Per favor reproba plus tarde.',
	'err-invalid-repo' => 'Deposito incognite: "$1".',
	'err-invalid-branch' => 'Branca incognite: "$1" in deposito "$2".',
	'err-nosnapshot' => 'Le instantaneos es generate cata poc horas. Durante le generation del instantaneo "$1" occurreva un error. Per favor reproba plus tarde.',
	'err-noupdatelog' => 'Nulle registro de actualisation ha essite trovate.',
	'repo-site-link' => 'Sito web',
	'repo-browse-link' => 'Examinar deposito',
	'repo-branches-label' => 'Brancas:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Obtene lo!',
	'updatelog-link' => 'registro de actualisation',
	'tablehead-repo' => 'Deposito',
	'tablehead-snapshots' => 'Instantaneos',
	'tablehead-branch' => 'Branca',
	'tablehead-filesize' => 'Dimension del file',
	'tablehead-hash' => 'Summas de controlo',
);

/** Italian (Italiano)
 * @author Beta16
 * @author Ximo17
 */
$messages['it'] = array(
	'title-overview' => 'Istantanee',
	'title-error' => 'Errore',
	'title-updatelog' => 'Aggiorna etichetta',
	'updatelog-intro' => "L'aggiornamento avviene ogni ora. Di seguito è presente l'output della console della ultima corsa.",
	'updatelog-active' => "L'aggiornamento è attualmente in esecuzione. Torna più tardi per il registro completo.",
	'download-button' => 'Scarica $1',
	'download-directlink' => 'link diretto',
	'title-downloadpage' => 'Scarica: $1',
	'downloadpage-directlink' => 'Clicca qui per scaricare lo snapshot.',
	'err-snapshotindex' => 'Indice delle istantanee temporaneamente non disponibile. Si prega di riprovare più tardi.',
	'err-invalid-repo' => 'Deposito sconosciuto: "$1".',
	'err-invalid-branch' => 'Sezione sconosciuta: "$1" nel deposito "$2".',
	'err-nosnapshot' => 'Le istantanee vengono generate ogni poche ore. Durante la generazione dello snapshot di "$1", si è verificato un errore. Riprova più tardi.',
	'err-noupdatelog' => 'Non è stato trovato alcun registro di aggiornamento.',
	'repo-site-link' => 'Sito web',
	'repo-browse-link' => 'Sfoglia nel deposito',
	'repo-branches-label' => 'Sezioni:',
	'repo-lastmoddate-label' => 'Data:',
	'branches-submit-button' => 'Ottienilo!',
	'updatelog-link' => 'Aggiornamento registro',
	'tablehead-repo' => 'Deposito',
	'tablehead-snapshots' => 'Istantanee',
	'tablehead-branch' => 'Sezione',
	'tablehead-filesize' => 'Dimensione del file',
	'tablehead-hash' => 'Checksum',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'title-overview' => 'スナップショット',
	'title-error' => 'エラー',
	'download-button' => '$1 をダウンロード',
	'download-directlink' => '直接リンク',
	'title-downloadpage' => 'ダウンロード：$1',
	'downloadpage-directlink' => 'スナップショットをダウンロードするにはここをクリックします。',
	'repo-site-link' => 'ウェブサイト',
	'repo-browse-link' => 'リポジトリを参照',
	'repo-branches-label' => 'ブランチ：',
	'repo-lastmoddate-label' => '日付：',
	'tablehead-repo' => 'リポジトリ',
	'tablehead-snapshots' => 'スナップショット',
	'tablehead-branch' => 'ブランチ',
	'tablehead-filesize' => 'ファイルサイズ',
	'tablehead-hash' => 'チェックサム',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'title-error' => 'Feeler',
	'download-button' => '$1 eroflueden',
	'download-directlink' => 'direkte Link',
	'title-downloadpage' => '$1 eroflueden',
	'downloadpage-directlink' => 'Klickt hei fir de Snapshot erofzelueden.',
	'repo-site-link' => 'Internetsite',
	'repo-lastmoddate-label' => 'Datum:',
	'tablehead-filesize' => 'Gréisst vum Fichier',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'title-overview' => 'Снимки',
	'title-error' => 'Грешка',
	'title-updatelog' => 'Дневник на подновувања',
	'updatelog-intro' => 'Скриптата врши поднова на секој час. Подолу е прикажан конзолниот извод од последната поднова.',
	'updatelog-active' => 'Скриптата моментално врши поднова. Навратете се подоцна за целосниот дневник.',
	'download-button' => 'Преземи $1',
	'download-directlink' => 'директна врска:',
	'title-downloadpage' => 'Преземање: $1',
	'downloadpage-directlink' => 'Стиснете тука за да ја преземете снимката.',
	'err-snapshotindex' => 'Индексот на снимки е привремено недостапен. Обидете се подоцна.',
	'err-invalid-repo' => 'Непознато складиште: „$1“.',
	'err-invalid-branch' => 'Непозната гранка: „$1“ во складиштето „$2“.',
	'err-nosnapshot' => 'Снимките се создаваат на секои неколку часа. Се појави грешка при создавањето на снимка на „$1“. Обидете се подоцна.',
	'err-noupdatelog' => 'Не пронајдов дневник на подновувања.',
	'repo-site-link' => 'Мреж. место',
	'repo-browse-link' => 'Прелистајте го складиштето',
	'repo-branches-label' => 'Гранки:',
	'repo-lastmoddate-label' => 'Датум:',
	'branches-submit-button' => 'Преземи',
	'updatelog-link' => 'дневник на подновувања',
	'tablehead-repo' => 'Складиште',
	'tablehead-snapshots' => 'Снимки',
	'tablehead-branch' => 'Гранка',
	'tablehead-filesize' => 'Големина',
	'tablehead-hash' => 'Тараба',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'title-overview' => 'Snapshot',
	'title-error' => 'Ralat',
	'title-updatelog' => 'Log kemas kini',
	'updatelog-intro' => 'Skrip kemas kini ini dijadualkan untuk berjalan setiap jam sekali. Yang berikut ialah keluaran konsol pada jalanan yang terbaru.',
	'updatelog-active' => 'Skrip kemas kini sedang berjalan. Sila datang balik nanti untuk log yang lengkap.',
	'download-button' => 'Muat turun $1',
	'download-directlink' => 'pautan terus',
	'title-downloadpage' => 'Muat turun: $1',
	'downloadpage-directlink' => 'Klik di sini untuk memuat turun snapshot.',
	'err-snapshotindex' => 'Indeks snapshot tidak tersedia buat sementara waktu. Sila cuba lagi nanti.',
	'err-invalid-repo' => 'Repositori tidak dikenali: "$1".',
	'err-invalid-branch' => 'Cabang tidak dikenali: "$1" dalam repositori "$2".',
	'err-nosnapshot' => 'Snapshot-snapshot ini dijana sekali setiap beberapa jam. Ketika menjana snapshot "$1", berlakunya ralat. Sila cuba lagi nanti.',
	'err-noupdatelog' => 'Tiada log kemas kini yang dijumpai.',
	'repo-site-link' => 'Tapak web',
	'repo-browse-link' => 'Semak seimbas repositori',
	'repo-branches-label' => 'Cabang:',
	'repo-lastmoddate-label' => 'Tarikh:',
	'branches-submit-button' => 'Dapatkannya!',
	'updatelog-link' => 'log kemas kini',
	'tablehead-repo' => 'Repositori',
	'tablehead-snapshots' => 'Snapshot',
	'tablehead-branch' => 'Cabang',
	'tablehead-filesize' => 'Saiz fail',
	'tablehead-hash' => 'Hash',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'title-overview' => 'Snapshots',
	'title-error' => 'Fout',
	'title-updatelog' => 'Updatelogboek',
	'updatelog-intro' => 'Het updatescript wordt volgens planning ieder uur uitgevoerd. Hieronder is de uitvoer van het colsole van de laatste keer te bekijken.',
	'updatelog-active' => 'Het updatescript wordt op het moment uitgevoerd. Kom op een later moment terug voor het complete logboek.',
	'download-button' => '$1 downloaden',
	'download-directlink' => 'directe verwijzing',
	'title-downloadpage' => 'Downloaden: $1',
	'downloadpage-directlink' => 'Klik hier om het snapshot te downloaden.',
	'err-snapshotindex' => 'De snapshotindex is tijdelijk niet beschikbaar. Probeer het later opnieuw.',
	'err-invalid-repo' => 'Onbekende repository: "$1".',
	'err-invalid-branch' => 'Onbekende branch: "$1" in repository "$2".',
	'err-nosnapshot' => 'De snapshots worden iedere paar uur aangemaakt. Tijdens het aanmaken van het snapshot voor "$1" is een fout opgetreden. Probeer het later opnieuw.',
	'err-noupdatelog' => 'Er is geen updatelogboek beschikbaar.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Repository bekijken',
	'repo-branches-label' => 'Branches:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Downloaden!',
	'updatelog-link' => 'updatelogboek',
	'tablehead-repo' => 'Repository',
	'tablehead-snapshots' => 'Snapshots',
	'tablehead-branch' => 'Branch',
	'tablehead-filesize' => 'Bestandsgrootte',
	'tablehead-hash' => 'Hash',
);

/** Serbian (Cyrillic script) (‪Српски (ћирилица)‬)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'title-overview' => 'Снимци',
	'title-error' => 'Грешка',
	'title-updatelog' => 'Дневник ажурирања',
	'updatelog-intro' => 'Скрипт ажурира сваког сата. Испод је приказан извод конзоле од последњег ажурирања.',
	'updatelog-active' => 'Скрипт је тренутно покренут. Навратите касније за целокупан дневник.',
	'download-button' => 'Преузми $1',
	'download-directlink' => 'директна веза',
	'title-downloadpage' => 'Преузимање: $1',
	'downloadpage-directlink' => 'Кликните овде да преузмете снимак.',
	'err-snapshotindex' => 'Попис снимака је привремено недоступан. Покушајте касније.',
	'err-invalid-repo' => 'Непозната ризница: „$1“.',
	'err-invalid-branch' => 'Непозната грана: „$1“ у ризници „$2“.',
	'err-nosnapshot' => 'Снимци се стварају сваких неколико сати. Дошло је до грешке при стварању снимка „$1“. Покушајте касније.',
	'err-noupdatelog' => 'Не могу да пронађем дневник ажурирања.',
	'repo-site-link' => 'Сајт',
	'repo-browse-link' => 'Прегледај ризницу',
	'repo-branches-label' => 'Гране:',
	'repo-lastmoddate-label' => 'Датум:',
	'branches-submit-button' => 'Преузми',
	'updatelog-link' => 'дневник ажурирања',
	'tablehead-repo' => 'Ризница',
	'tablehead-snapshots' => 'Снимци',
	'tablehead-branch' => 'Грана',
	'tablehead-filesize' => 'Величина датотеке',
	'tablehead-hash' => 'Контролни збир',
);

/** Serbian (Latin script) (‪Srpski (latinica)‬)
 * @author Rancher
 */
$messages['sr-el'] = array(
	'title-overview' => 'Snimci',
	'title-error' => 'Greška',
	'title-updatelog' => 'Dnevnik ažuriranja',
	'updatelog-intro' => 'Skript ažurira svakog sata. Ispod je prikazan izvod konzole od poslednjeg ažuriranja.',
	'updatelog-active' => 'Skript je trenutno pokrenut. Navratite kasnije za celokupan dnevnik.',
	'download-button' => 'Preuzmi $1',
	'download-directlink' => 'direktna veza',
	'title-downloadpage' => 'Preuzimanje: $1',
	'downloadpage-directlink' => 'Kliknite ovde da preuzmete snimak.',
	'err-snapshotindex' => 'Popis snimaka je privremeno nedostupan. Pokušajte kasnije.',
	'err-invalid-repo' => 'Nepoznata riznica: „$1“.',
	'err-invalid-branch' => 'Nepoznata grana: „$1“ u riznici „$2“.',
	'err-nosnapshot' => 'Snimci se stvaraju svakih nekoliko sati. Došlo je do greške pri stvaranju snimka „$1“. Pokušajte kasnije.',
	'err-noupdatelog' => 'Ne mogu da pronađem dnevnik ažuriranja.',
	'repo-site-link' => 'Sajt',
	'repo-browse-link' => 'Pregledaj riznicu',
	'repo-branches-label' => 'Grane:',
	'repo-lastmoddate-label' => 'Datum:',
	'branches-submit-button' => 'Preuzmi',
	'updatelog-link' => 'dnevnik ažuriranja',
	'tablehead-repo' => 'Riznica',
	'tablehead-snapshots' => 'Snimci',
	'tablehead-branch' => 'Grana',
	'tablehead-filesize' => 'Veličina datoteke',
	'tablehead-hash' => 'Kontrolni zbir',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'download-directlink' => 'నేరు లంకె',
	'repo-site-link' => 'జాలగూడు',
	'repo-lastmoddate-label' => 'తేది:',
);

/** Толышә зывон (Толышә зывон)
 * @author Гусейн
 */
$messages['tly'] = array(
	'title-error' => 'Сәһв',
	'repo-lastmoddate-label' => 'Тарых:',
	'tablehead-filesize' => 'Фајли памјә',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'title-overview' => 'Ảnh chụp nhanh',
	'title-error' => 'Lỗi',
	'title-updatelog' => 'Cập nhật nhật trình',
	'updatelog-intro' => 'Kịch bản cập nhật được dự định để chạy mỗi giờ một lần. Dưới đây là kết quả trên bảng kiểm soát từ lần chạy vừa rồi.',
	'updatelog-active' => 'Kịch bản hiện đang chạy. Hãy trở lại sau để xem nhật trình đầy đủ.',
	'download-button' => 'Tải về $1',
	'download-directlink' => 'liên kết trục tiếp',
	'title-downloadpage' => 'Tải về: $1',
	'downloadpage-directlink' => 'Nhấn vào đây để tải về ảnh chụp nhanh.',
	'err-snapshotindex' => 'Chỉ mục ảnh chụp nhanh tạm không hoạt động. Xin vui lòng thử lại sau.',
	'err-invalid-repo' => 'Kho không rõ: “$1”.',
	'err-invalid-branch' => 'Chi nhánh không rõ: “$1” trong kho “$2”.',
	'err-nosnapshot' => 'Các ảnh chụp nhanh được tạo ra vài giờ một lần. Xuất hiện lỗi khi tạo ảnh chụp nhanh cho “$1”. Xin vui lòng thử lại sau.',
	'err-noupdatelog' => 'Không tìm thấy nhật trình cập nhật.',
	'repo-site-link' => 'Website',
	'repo-browse-link' => 'Duyệt kho',
	'repo-branches-label' => 'Các chi nhánh:',
	'repo-lastmoddate-label' => 'Ngày giờ:',
	'branches-submit-button' => 'Lấy nó!',
	'updatelog-link' => 'nhật trình cập nhật',
	'tablehead-repo' => 'Kho',
	'tablehead-snapshots' => 'Ảnh chụp nhanh',
	'tablehead-branch' => 'Chi nhánh',
	'tablehead-filesize' => 'Kích thước tập tin',
	'tablehead-hash' => 'Giá trị băm',
);
