<?php
/* $Id$ */

/**
 *     Translated by:
 *     Samir Kobiljak <kobiljak@aon.at>
 *     http://www.kobiljak.com
 */

$charset = 'windows-1250';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('bajta', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Ned', 'Pon', 'Uto', 'Sri', '�et', 'Pet', 'Sub');
$month = array('jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. u %H:%M';
$timespanfmt = '%s dana, %s sati, %s minuta i %s sekundi';

$strAPrimaryKey = 'Osnovni klju� je upravo dodan %s';
$strAbortedClients = 'Prekinuto';
$strAbsolutePathToDocSqlDir = 'Unesite kompletnu putanju do direkcije docSQL na veb serveru';
$strAccessDenied = 'Ulaz nije dozvoljen';
$strAccessDeniedExplanation = 'phpMyAdmin je poku�ao da se pove�e na MySQL server, ali je server odbio povezivanje. Provjerite naziv hosta, korisni�ko ime i lozinku u config.inc.php i uvjerite se da odgovaraju podacima koje ste dobili od administratora MySQL servera.';
$strAction = 'Akcija';
$strAddAutoIncrement = 'Dodaj AUTO_INCREMENT vrijednost';
$strAddDeleteColumn = 'Dodaj/obri�i kolonu';
$strAddDeleteRow = 'Dodaj/obri�i polje za kriterij';
$strAddDropDatabase = 'Dodaj DROP DATABASE';
$strAddIntoComments = 'Dodaj u komentare';
$strAddNewField = 'Dodaj novo polje';
$strAddPrivilegesOnDb = 'Dodaj privilegije na slijede�oj bazi';
$strAddPrivilegesOnTbl = 'Dodaj privilegije na slijede�oj tabeli';
$strAddSearchConditions = 'Dodaj uslove pretra�ivanja (dio "WHERE" upita):';
$strAddToIndex = 'Dodaj u klju� &nbsp;%s&nbsp;kolona(e)';
$strAddUser = 'Dodaj novog korisnika';
$strAddUserMessage = 'Dodali ste novog korisnika.';
$strAddedColumnComment = 'Dodan je komentar koloni';
$strAddedColumnRelation = 'Dodana je relacija koloni';
$strAdministration = 'Administracija';
$strAffectedRows = 'Obuhva�eno redova:';
$strAfter = 'Poslije %s';
$strAfterInsertBack = 'Nazad na prethodnu stranu';
$strAfterInsertNewInsert = 'Dodaj jo� jedan novi red';
$strAll = 'Sve';
$strAllTableSameWidth = 'prikaz svih tabela iste �irine?';
$strAlterOrderBy = 'Promijeni redoslijed u tabeli';
$strAnIndex = 'Klju� je upravo dodan %s';
$strAnalyzeTable = 'Analiziraj tabelu';
$strAnd = 'i';
$strAny = 'Bilo koji';
$strAnyHost = 'Bilo koji host';
$strAnyUser = 'Bilo koji korisnik';
$strArabic = 'Arapski';
$strArmenian = 'Jermenski';
$strAscending = 'Rastu�i';
$strAtBeginningOfTable = 'Na po�etku tabele';
$strAtEndOfTable = 'Na kraju tabele';
$strAttr = 'Atributi';
$strAutodetect = 'automatski';
$strAutomaticLayout = 'Automatski raspored';

$strBack = 'Nazad';
$strBaltic = 'Balti�ki';
$strBeginCut = 'PO�ETAK REZ';
$strBeginRaw = 'PO�ETAK SIROVO';
$strBinary = 'Binarni';
$strBinaryDoNotEdit = 'Binarni - ne mijenjaj';
$strBookmarkDeleted = 'Obilje�iva� je upravo obrisan.';
$strBookmarkLabel = 'Naziv';
$strBookmarkQuery = 'Obilje�en SQL-upit';
$strBookmarkThis = 'Obilje�i SQL-upit';
$strBookmarkView = 'Vidi samo';
$strBrowse = 'Pregled';
$strBrowseForeignValues = 'Pregledaj strane vrijednosti';
$strBulgarian = 'Bugarski';
$strBzError = 'phpMyAdmin nije mogao da kompresuje sadr�aj baze zbog neispravne BZ2 ekstenzije u ovoj verziji PHP-a. Preporu�uje se da podesite <code>$cfg[\'BZipDump\']</code> direktivu u va�em phpMyAdmin konfiguracionom fajlu na <code>FALSE</code>. Ako �elite da koristite mogu�nosti BZ2 kompresije, trebalo bi da pre�ete na noviju verziju PHP-a. Vidite PHP izve�taj o gre�kama %s za detalje.';
$strBzip = '"bzip-ovano"';

$strCSVOptions = 'CSV opcije';
$strCannotLogin = 'Ne mogu da se prijavim na MySQL server';
$strCantLoad = 'ne mogu da u�itam ekstenziju %s,<br />molim provjerite PHP konfiguraciju';
$strCantLoadRecodeIconv = 'Ne mogu da u�itam iconv ili recode ekstenzije potrebne za konverziju skupova znakova, podesite PHP da dozvoli kori��enje ovih ekstenzija ili onemogu�ite konverziju skupova znakova u phpMyAdmin-u.';
$strCantRenameIdxToPrimary = 'Ne mogu da promenim klju� u PRIMARY (primarni) !';
$strCantUseRecodeIconv = 'Ne mogu da koristim iconv ili libiconv ili recode_string funkcije iako ekstenzija prijavljuje da je u�itana. Proverite va�u PHP konfiguraciju.';
$strCardinality = 'Kardinalnost';
$strCarriage = 'Novi red (carriage return): \\r';
$strCaseInsensitive = 'Ne razlikuje mala i velika slova';
$strCaseSensitive = 'Razlikuje mala i velika slova';
$strCentralEuropean = 'Centralnoevropski';
$strChange = 'Promijeni';
$strChangeCopyMode = 'Napravi novog korisnika sa istim privilegijama i ...';
$strChangeCopyModeCopy = '... sa�uvaj stare.';
$strChangeCopyModeDeleteAndReload = ' ... obri�i starog iz tabele korisnika i zatim ponovo u�itaj privilegije.';
$strChangeCopyModeJustDelete = ' ... obri�i stare iz tabela korisnika.';
$strChangeCopyModeRevoke = ' ... obustavi sve privilegije starog korisnika i zatim ga obri�i.';
$strChangeCopyUser = 'Promeni informacije o prijavi / Kopiraj korisnika';
$strChangeDisplay = 'Izaberi polja za prikaz';
$strChangePassword = 'Promeni lozinku';
$strCharset = 'Karakter set';
$strCharsetOfFile = 'Karakter set datoteke:';
$strCharsets = 'Kodne strane';
$strCharsetsAndCollations = 'Karakter setovi i sortiranje';
$strCheckAll = 'Ozna�i sve';
$strCheckPrivs = 'Provjeri privilegije';
$strCheckPrivsLong = 'Provjeri privilegije za bazu &quot;%s&quot;.';
$strCheckTable = 'Provjeri tabelu';
$strChoosePage = 'Izaberite stranu koju menjate';
$strColComFeat = 'Prikazujem komentare kolone';
$strCollation = 'Sortiranje';
$strColumnNames = 'Imena kolona';
$strColumnPrivileges = 'Privilegije vezane za kolone';
$strCommand = 'Naredba';
$strComments = 'Komentari';
$strCompleteInserts = 'Kompletan INSERT (sa imenima polja)';
$strCompression = 'Kompresija';
$strConfigFileError = 'phpMyAdmin nije mogao da pro�ita va� konfiguracioni fajl!<br />Ovo se mo�e destiti ako PHP na�e gre�ku u procesiranju ili ne mo�e da prona�e fajl.<br />Pozovite konfiguracioni fajl direktno koriste�i donji link u pro�itajte poruke o gre�ci koje dobijate. U ve�ini slu�ajeve negde nedostaje navodnik ili ta�ka-zarez.<br />Ako dobijete praznu stranu, sve je u redu.';
$strConfigureTableCoord = 'Podesite koordinate za tabelu %s';
$strConnections = 'Konekcije';
$strCookiesRequired = 'Kola�i�i (Cookies) moraju u ovom slu�aju biti aktivirani.';
$strCopyTable = 'Kopiraj tabelu u (baza<b>.</b>tabela):';
$strCopyTableOK = 'Tabela %s je kopirana u %s.';
$strCopyTableSameNames = 'Ne mogu da kopiram tabelu u samu sebe!';
$strCouldNotKill = 'phpMyAdmin nije mogao da prekine proces %s. Vjerovatno je ve� zatvoren.';
$strCreate = 'Napravi';
$strCreateIndex = 'Napravi klju� na&nbsp;%s&nbsp;kolona';
$strCreateIndexTopic = 'Napravi novi klju�';
$strCreateNewDatabase = 'Napravi novu bazu podataka';
$strCreateNewTable = 'Napravi novu tabelu u bazi %s';
$strCreatePage = 'Napravi novu stranu';
$strCreatePdfFeat = 'Pravljenje PDF-ova';
$strCriteria = 'Kriterijum';
$strCroatian = 'Hrvatski';
$strCyrillic = '�irili�ni';
$strCzech = '�e�ki';

$strDBComment = 'Komentar baze:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Pogodaka';
$strDBGLine = 'Linija';
$strDBGMaxTimeMs = 'Max vrijeme, ms';
$strDBGMinTimeMs = 'Min vrijeme, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Vrijeme/pogodak, ms';
$strDBGTotalTimeMs = 'Ukupno vrijeme, ms';
$strDanish = 'Danski';
$strData = 'Podaci';
$strDataDict = 'Re�nik podataka';
$strDataOnly = 'Samo podaci';
$strDatabase = 'Baza podataka';
$strDatabaseExportOptions = 'Opcije za izvoz baze';
$strDatabaseHasBeenDropped = 'Baza %s je odba�ena.';
$strDatabaseNoTable = 'Baza ne sadr�i tabele!';
$strDatabases = 'Baze';
$strDatabasesDropped = '%s baza je uspje�no odba�ena.';
$strDatabasesStats = 'Statistika baze';
$strDatabasesStatsDisable = 'Isklju�i statistike';
$strDatabasesStatsEnable = 'Uklju�i statistike';
$strDatabasesStatsHeavyTraffic = 'Napomena: uklju�ivanje statistika mo�e prouzrokovati veliki protok podataka izme�u web i MySQL servera.';
$strDbPrivileges = 'Privilegije vezane za bazu';
$strDbSpecific = 'Specifi�no za bazu';
$strDefault = 'Podrazumjevano';
$strDefaultValueHelp = 'Za podrazumjevanu vrijednost, unesite samo jednu vrijednost, bez kosih crta ili navodnika u ovom obliku: a';
$strDelOld = 'Trenutna strana ima reference na tabele koje vi�e ne postoje. �elite li da obri�ete te reference?';
$strDelete = 'Obri�i';
$strDeleteAndFlush = 'Obri�i korisnike i ponovo u�itaj privilegije.';
$strDeleteAndFlushDescr = 'Ovo je naj�istiji na�in, ali ponovno u�itavanje privilegina mo�e da potraje.';
$strDeleted = 'Red je obrisan';
$strDeletedRows = 'Obrisani redovi:';
$strDeleting = 'Bri�em %s';
$strDescending = 'Opadaju�i';
$strDescription = 'Opis';
$strDictionary = 'rije�nik';
$strDisabled = 'Onemogu�eno';
$strDisplayFeat = 'Prika�i osobine';
$strDisplayOrder = 'Redosled prikaza:';
$strDisplayPDF = 'Prika�i PDF shemu';
$strDoAQuery = 'Napravi "upit po primjeru" (d�oker: "%")';
$strDoYouReally = 'Da li stvarno ho�ete da ';
$strDocu = 'Dokumentacija';
$strDrop = 'Odbaci';
$strDropSelectedDatabases = 'Odbaci izabrane baze';
$strDropUsersDb = 'Odbaci baze koje se zovu isto kao korisnici.';
$strDumpSaved = 'Sadr�aj baze je sa�uvan u fajl %s.';
$strDumpXRows = 'Prika�i %s redova po�ev�i od reda %s.';
$strDumpingData = 'Prikaz podataka tabele';
$strDynamic = 'dinami�ki';

$strEdit = 'Promeni';
$strEditPDFPages = 'Izmena PDF strana';
$strEditPrivileges = 'Promijeni privilegije';
$strEffective = 'Efektivne';
$strEmpty = 'Isprazni';
$strEmptyResultSet = 'MySQL je vratio prazan rezultat (nula redova).';
$strEnabled = 'Omogu�eno';
$strEnd = 'Kraj';
$strEndCut = 'KRAJ REZ';
$strEndRaw = 'KRAJ SIROVO';
$strEnglish = 'Engleski';
$strEnglishPrivileges = ' Napomena: MySQL imena privilegija moraju da budu na engleskom ';
$strError = 'Gre�ka';
$strEstonian = 'Estonski';
$strExcelOptions = 'Excel opcije';
$strExecuteBookmarked = 'Izvr�i upam�en upit';
$strExplain = 'Objasni SQL';
$strExport = 'Izvoz';
$strExtendedInserts = 'Pro�ireni INSERT';
$strExtra = 'Dodatno';

$strFailedAttempts = 'Neuspelih poku�aja';
$strField = 'Polje';
$strFieldHasBeenDropped = 'Polje %s je obrisano';
$strFields = 'Polja';
$strFieldsEmpty = ' Broj polja je nula! ';
$strFieldsEnclosedBy = 'Polja ograni�ena sa';
$strFieldsEscapedBy = 'Escape karakter &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = 'Polja razdvojena sa';
$strFileAlreadyExists = 'Datoteka %s ve� postoji na serveru, promijenite ime datoteke ili uklju�ite opciju prepisivanja.';
$strFileCouldNotBeRead = 'Datoteku nije mogu�e pro�itati';
$strFileNameTemplate = '�ablon imena datoteke';
$strFileNameTemplateHelp = 'Koristi __DB__ za ime baze, __TABLE__ za ime tabele  i %sbilo koju strftime%s opciju za specifikaciju vremena, i ekstenzija �e automatski biti dodata. Sav ostali tekst bi�e sa�uvan.';
$strFileNameTemplateRemember = 'zapamti �ablon';
$strFixed = 'ura�eno';
$strFlushPrivilegesNote = 'Napomena: phpMyAdmin uzima privilegije korisnika direktno iz MySQL tabela privilegija. Sadr�aj ove tabele mo�e se razlikovati od privilegija koje server koristi ako su izvr�ene ru�ne izmjene. U tom slu�aju %sponovo u�itajte privilegije%s pre nego �to nastavite.';
$strFlushTable = 'Osvje�i tabelu ("FLUSH")';
$strFormEmpty = 'Nedostaje vrijednost u obrascu!';
$strFormat = 'Format';
$strFullText = 'Pun tekst';
$strFunction = 'Funkcija';

$strGenBy = 'Generirao';
$strGenTime = 'Vrijeme kreiranja';
$strGeneralRelationFeat = 'Op�te osobine relacija';
$strGerman = 'Njema�ki';
$strGlobal = 'globalno';
$strGlobalPrivileges = 'Globalne privilegije';
$strGlobalValue = 'Globalna vrednost';
$strGo = 'Kreni';
$strGrantOption = 'Omogu�i';
$strGreek = 'Gr�ki';
$strGzip = '"gzip-ovano"';

$strHasBeenAltered = 'je promijenjen(a).';
$strHasBeenCreated = 'je kreiran(a).';
$strHaveToShow = 'Morate izabrati bar jednu kolonu za prikaz';
$strHebrew = 'Jevrejski';
$strHome = 'Po�etna strana';
$strHomepageOfficial = 'phpMyAdmin veb sajt';
$strHost = 'Host';
$strHostEmpty = 'Ime hosta je prazno!';
$strHungarian = 'Ma�arski';

$strId = 'ID';
$strIdxFulltext = 'Tekst klju�';
$strIfYouWish = 'Ako �elite da izlistate samo neke kolone u tabeli, navedite ih razdvojene zarezom';
$strIgnore = 'Ignori�i';
$strIgnoringFile = 'Ignori�em fajl %s';
$strImportDocSQL = 'Uvoz docSQL fajlova';
$strImportFiles = 'Uvoz fajlova';
$strImportFinished = 'Uvoz zavr�en';
$strInUse = 'se koristi';
$strIndex = 'Klju�';
$strIndexHasBeenDropped = 'Klju� %s je obrisan';
$strIndexName = 'Ime klju�a :';
$strIndexType = 'Tip klju�a :';
$strIndexes = 'Klju�evi';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Va� konfiguracioni fajl sadr�i pode�avanja (root bez lozinke) koja odgovaraju standardnom MySQL privilegovanom nalogu. Va� MySQL server radi sa ovim pode�avanjima, otvoren je za hakovanje, i zaista treba da ispravite ovaj sigurnosni rizik.';
$strInsert = 'Novi zapis';
$strInsertAsNewRow = 'Unesi kao novi red';
$strInsertNewRow = 'Unesi novi red';
$strInsertTextfiles = 'Uvezi podatke iz tekstualne datoteke';
$strInsertedRowId = 'ID umetnutih redova:';
$strInsertedRows = 'Uneseno redova:';
$strInstructions = 'Uputstva';

$strJapanese = 'Japanski';
$strJumpToDB = 'Pre�i na bazu &quot;%s&quot;.';
$strJustDelete = 'Samo obri�i korisnike iz tabele privilegija.';
$strJustDeleteDescr = '&quot;Obrisani&quot; korisnici �e i dalje imati pristup serveru dok privilegije ne budu ponovo u�itane.';

$strKeepPass = 'Nemoj da mijenja� lozinku';
$strKeyname = 'Ime klju�a';
$strKill = 'Obustavi';
$strKorean = 'Korejski';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX opcije';
$strLandscape = 'Polo�eno';
$strLengthSet = 'Du�ina/Vrijednost*';
$strLimitNumRows = 'Broj redova po strani';
$strLineFeed = 'Oznaka za kraj linije: \\n';
$strLinesTerminatedBy = 'Linije se zavr�avaju sa';
$strLinkNotFound = 'Veza nije prona�ena';
$strLinksTo = 'Veze ka';
$strLithuanian = 'Litvanski';
$strLoadExplanation = 'Najbolji metod je ve� izabran, ali ga mo�ete promijeniti ako ne radi.';
$strLoadMethod = 'LOAD metod';
$strLocalhost = 'Lokalni';
$strLocationTextfile = 'Lokacija tekstualne datoteke';
$strLogPassword = 'Lozinka:';
$strLogUsername = 'Korisni�ko ime:';
$strLogin = 'Prijavljivanje';
$strLoginInformation = 'Podatci o prijavi';
$strLogout = 'Odjavljivanje';

$strMIME_MIMEtype = 'MIME-tipovi';
$strMIME_available_mime = 'Dostupni MIME-tipovi';
$strMIME_available_transform = 'Dostupne transformacije';
$strMIME_description = 'Opis';
$strMIME_nodescription = 'Nema opisa za ovu transformaciju.<br />Molimo pitajte autora �ta %s radi.';
$strMIME_transformation = 'Tranformacije �ita�a';
$strMIME_transformation_note = 'Za listu dostupnih opcija transformacije i njihove transformacije MIME-tipova, kliknite na %sopise transformacija%s';
$strMIME_transformation_options = 'Opcije transformacije';
$strMIME_transformation_options_note = 'Molimo unesite vrijednosti za opcije transformacije koriste�i ovaj oblik: \'a\',\'b\',\'c\'...<br />Ako treba da unesete obrnutu kosu crtu ("\\") ili apostrof ("\'") u te vrijednosti, stavite obrnutu kosu crtu ispred njih (na primjer \'\\\\xyz\' ili \'a\\\'b\').';
$strMIME_without = 'MIME-tipovi prikazani u kursivu nemaju odvojene funkcije transformacije.';
$strModifications = 'Izmjene su sa�uvane';
$strModify = 'Promijeni';
$strModifyIndexTopic = 'Izmijeni klju�';
$strMoreStatusVars = 'Jo� statusnih promjenljivih';
$strMoveTable = 'Pomjeri tabelu u (baza<b>.</b>tabela):';
$strMoveTableOK = 'Tabela %s je pomjerena u %s.';
$strMoveTableSameNames = 'Ne mogu da premjestim tabelu u samu sebe!';
$strMultilingual = 'vi�ejezi�ki';
$strMustSelectFile = 'Morate izabrati datoteku koju �elite da umetnete.';
$strMySQLCharset = 'MySQL set karaktera';
$strMySQLReloaded = 'MySQL ponovo pokrenut.';
$strMySQLSaid = 'MySQL ka�e: ';
$strMySQLServerProcess = 'MySQL %pma_s1% pokrenut na %pma_s2%, prijavljen kao %pma_s3%';
$strMySQLShowProcess = 'Prika�i listu procesa';
$strMySQLShowStatus = 'Prika�i MySQL informacije o toku rada';
$strMySQLShowVars = 'Prika�i MySQL sistemske promenljive';

$strName = 'Ime';
$strNext = 'Slijede�i';
$strNo = 'Ne';
$strNoDatabases = 'Baza ne postoji';
$strNoDatabasesSelected = 'Nije izabrana ni jedna baza.';
$strNoDescription = 'nema opisa';
$strNoDropDatabases = '"DROP DATABASE" komanda je onemogu�ena.';
$strNoExplain = 'Presko�i obja�njavanje SQL-a';
$strNoFrames = 'phpMyAdmin preferira �ita�e koji podr�avaju okvire.';
$strNoIndex = 'Klju� nije definisan!';
$strNoIndexPartsDefined = 'Dijelovi klju�a nisu definisani!';
$strNoModification = 'Nema izmjena';
$strNoOptions = 'Ne postoje opcije za ovaj format';
$strNoPassword = 'Nema lozinke';
$strNoPermission = 'Veb serveru nije dozvoljeno da sa�uva datoteku %s.';
$strNoPhp = 'bez PHP koda';
$strNoPrivileges = 'Nema privilegija';
$strNoQuery = 'Nema SQL upita!';
$strNoRights = 'Nije Vam dozvoljeno da budete ovdje!';
$strNoSpace = 'Nedovoljno prostora za snimanje datoteke %s.';
$strNoTablesFound = 'Tabele nisu prona�ene u bazi.';
$strNoUsersFound = 'Korisnik nije na�en.';
$strNoValidateSQL = 'Presko�i provjeru SQL-a';
$strNone = 'nema';
$strNotNumber = 'Ovo nije broj!';
$strNotOK = 'nije u redu';
$strNotSet = '<b>%s</b> tabela nije prona�ena ili nije postavljena u %s';
$strNotValidNumber = 'nije odgovaraju�i broj kolone!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s pogodaka unutar tabele <i>%s</i>';
$strNumSearchResultsTotal = '<b>Ukupno:</b> <i>%s</i> pogodaka';
$strNumTables = 'Tabele';

$strOK = 'U redu';
$strOftenQuotation = 'Navodnici koji se koriste. OPCIONO se misli da neka polja mogu, ali ne moraju da budu pod znacima navoda.';
$strOperations = 'Operacije';
$strOptimizeTable = 'Optimiziraj tabelu';
$strOptionalControls = 'Opciono. Znak koji prethodi specijalnim znacima.';
$strOptionally = 'OPCIONO';
$strOr = 'ili';
$strOverhead = 'Prekora�enje';
$strOverwriteExisting = 'Prepi�i postoje�e fajlove';

$strPHP40203 = 'Koristite PHP 4.2.3, koji ima ozbiljnu gresku sa vi�ebajtnim stringovima (mbstring). Pogledajte izvje�taj o gre�ci br. 19404. Ova verzija PHP-a se ne preporu�uje za kori��enje sa phpMyAdmin.';
$strPHPVersion = 'verzija PHP-a';
$strPageNumber = 'Broj strane:';
$strPaperSize = 'Dimenzije papira';
$strPartialText = 'Dio teksta';
$strPassword = 'Lozinka';
$strPasswordChanged = 'Lozinka za %s je uspje�no promjenjena.';
$strPasswordEmpty = 'Lozinka je prazna!';
$strPasswordNotSame = 'Lozinke nisu identi�ne!';
$strPdfDbSchema = 'Shema baze "%s" - Strana %s';
$strPdfInvalidTblName = 'Tabela "%s" ne postoji!';
$strPdfNoTables = 'Nema tabela';
$strPerHour = 'na sat';
$strPerMinute = 'u minuti';
$strPerSecond = 'u sekundi';
$strPhoneBook = 'telefonski imenik';
$strPhp = 'Napravi PHP kod';
$strPmaDocumentation = 'phpMyAdmin dokumentacija';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> direktiva MORA biti podje�ena u konfiguracionoj datoteci!';
$strPortrait = 'Uspravno';
$strPos1 = 'Po�etak';
$strPrevious = 'Prethodna';
$strPrimary = 'Primarni';
$strPrimaryKeyHasBeenDropped = 'Primarni klju� je obrisan';
$strPrimaryKeyName = 'Ime primarnog klju�a mora da bude... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mora</b> biti ime <b>samo</b> primarnog klju�a!)';
$strPrint = '�tampaj';
$strPrintView = 'Za �tampu';
$strPrivDescAllPrivileges = 'Uklju�uje sve privilegije osim GRANT.';
$strPrivDescAlter = 'Dozvoljava izmjenu struktura postoje�ih tabela.';
$strPrivDescCreateDb = 'Dozvoljava kreiranje novih baza i tabela.';
$strPrivDescCreateTbl = 'Dozvoljava kreiranje novih tabela.';
$strPrivDescCreateTmpTable = 'Dozvoljava kreiranje privremenih tabela..';
$strPrivDescDelete = 'Dozvoljava brisanje podataka.';
$strPrivDescDropDb = 'Dozvoljava odbacivanje baza i tabela.';
$strPrivDescDropTbl = 'Dozvoljava odbacivanje tabela.';
$strPrivDescExecute = 'Dozvoljava pokretanje sa�uvanih procedura. Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescFile = 'Dozvoljava uvoz podataka i njihov izvoz u datoteke.';
$strPrivDescGrant = 'Dozvoljava dodavanje korisnika i privilegija bez ponovnog u�itavanja tabela privilegija.';
$strPrivDescIndex = 'Dozvoljava kreiranje i brisanje klju�eva.';
$strPrivDescInsert = 'Dozvoljava umetanje i zamjenu podataka.';
$strPrivDescLockTables = 'Dozvoljava zaklju�avanje tabela teku�im procesima.';
$strPrivDescMaxConnections = 'Ograni�ava broj novih konekcija koje korisnik mo�e ta otvori na sat.';
$strPrivDescMaxQuestions = 'Ograni�ava broj upita koje korisnik mo�e da uputi serveru za sat.';
$strPrivDescMaxUpdates = 'Ograni�ava broj komandi koje menjaju tabele ili baze koje korisnik mo�e da izvr�i na sat.';
$strPrivDescProcess3 = 'Dozvoljava prekidanje procesa drugih korisnika.';
$strPrivDescProcess4 = 'Dozvoljava pregled kompletnih upita u listi procesa.';
$strPrivDescReferences = 'Nema efekta u ovoj verziji MySQL-a.';
$strPrivDescReload = 'Dozvoljava ponovno u�itavanje pode�avanja servera i pra�njenje ke�a servera.';
$strPrivDescReplClient = 'Daje pravo korisniku da pita gde su glavni/pomo�ni serveri.';
$strPrivDescReplSlave = 'Potrebno zbog pomo�nih servera za replikaciju.';
$strPrivDescSelect = 'Dozvoljava �itanje podataka.';
$strPrivDescShowDb = 'Daje pristup kompletnoj listi baza.';
$strPrivDescShutdown = 'Dozvoljava ga�enje servera.';
$strPrivDescSuper = ' Dozvoljava povezivanje iako je dostignut maksimalan broj dozvoljenih veza; Neophodno za ve�inu administrativnih opcija kao �to su pode�avanje globalnih promenljivih ili prekidanje procesa ostalih korisnika.';
$strPrivDescUpdate = 'Dozvoljava izmenu podataka.';
$strPrivDescUsage = 'Nema privilegija.';
$strPrivileges = 'Privilegije';
$strPrivilegesReloaded = 'Privilegije su uspe�no ponovo u�itane.';
$strProcesslist = 'Lista procesa';
$strProperties = 'Svojstva';
$strPutColNames = 'Stavi imena polja u prvi red';

$strQBE = 'Upit po primeru';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Prozor za upite';
$strQueryOnDb = 'SQL upit na bazi <b>%s</b>:';
$strQuerySQLHistory = 'SQL istorijat';
$strQueryStatistics = '<b>Statistike upita</b>: %s upita je postavljeno serveru od njegovog pokretanja.';
$strQueryTime = 'Upit je trajao %01.4f sekundi';
$strQueryType = 'Vrsta upita';
$strQueryWindowLock = 'Ne prepisuj ovaj upit izvan prozora';

$strReType = 'Ponovite unos';
$strReceived = 'Primljeno';
$strRecords = 'Zapisi';
$strReferentialIntegrity = 'Proveri referencijalni integritet:';
$strRelationNotWorking = 'Dodatne mogu�nosti za rad sa povezanim tabelama su isklju�ene. Da biste saznali za�to, kliknite %sovde%s.';
$strRelationView = 'Relacioni pogled';
$strRelationalSchema = 'Relaciona shema';
$strRelations = 'Relacije';
$strReloadFailed = 'Ponovno pokretanje MySQL-a nije uspelo.';
$strReloadMySQL = 'Ponovo pokreni MySQL';
$strReloadingThePrivileges = 'Ponovo u�itavam privilegije';
$strRemoveSelectedUsers = 'Ukloni izabrane korisnike';
$strRenameTable = 'Promjeni ime tabele u ';
$strRenameTableOK = 'Tabeli %s promjenjeno ime u %s';
$strRepairTable = 'Popravi tabelu';
$strReplace = 'Zamijeni';
$strReplaceNULLBy = 'Zamijeni NULL sa';
$strReplaceTable = 'Zamijeni podatke u tabeli sa podatcima iz datoteke';
$strReset = 'Resetuj';
$strResourceLimits = 'Ograni�enja resursa';
$strRevoke = 'Zabrani';
$strRevokeAndDelete = 'Obustavi sve aktivne privilegije korisnika i zatim ih obri�i.';
$strRevokeAndDeleteDescr = 'Korisnici �e i dalje imati USAGE privilegije dok se privilegije ponovo ne u�itaju.';
$strRevokeMessage = 'Zabranili ste privilegije za %s';
$strRowLength = 'Du�ina reda';
$strRowSize = 'Veli�ina reda';
$strRows = 'Redova';
$strRowsFrom = ' redova po�ev od reda';
$strRowsModeFlippedHorizontal = 'horizontalnom (rotirana zaglavlja)';
$strRowsModeHorizontal = 'horizontalnom';
$strRowsModeOptions = 'u %s modu i ponovi zaglavlje posle svakog %s reda';
$strRowsModeVertical = 'vertikalnom';
$strRowsStatistic = 'Statistike reda';
$strRunQuery = 'Izvr�i SQL upit';
$strRunSQLQuery = 'Izvr�i SQL upit(e) na bazi %s';
$strRunning = 'na serveru %s';
$strRussian = 'Ruski';

$strSQL = 'SQL';
$strSQLOptions = 'SQL opcije';
$strSQLParserBugMessage = 'Postoji mogu�nost da ste prona�li gresku u SQL parseru. Molimo ispitajte svoj upit pa�ljivo, i provjerite da su navodnici ispravni i da ne nedostaju. Ostali mogu�i razlozi gre�ke mogu biti da ste poslali binarni fajl van oblasti za obi�an tekst. Mo�ete probati svoj upit u MySQL interfejsu komandne linije. Donja poruka o gre�ci MySQL servera, ako je ima, mo�e vam pomo�i u otkrivanju problema. Ako i dalje imate probleme ili ako parser ne uspjeva tamo gde uspeva interfejs komandne linije, svedite svoj SQL upit na jedan jedini upit koji stvara probleme i po�aljite nam izvje�taj o gre�ci sa delom koda u donjoj REZ sekciji:';
$strSQLParserUserError = 'Izgleda da postoji gre�ka u va�em SQL upitu. Ovde je poruka o gre�ki MySQL servera, koja vam mo�e pomo�i u otkrivanju problema';
$strSQLQuery = 'SQL upit';
$strSQLResult = 'SQL rezultat';
$strSQPBugInvalidIdentifer = 'Neispravan identifikator';
$strSQPBugUnclosedQuote = 'Navodnik nije zatvoren';
$strSQPBugUnknownPunctuation = 'Nepoznat string interpunkcije';
$strSave = 'Sa�uvaj';
$strSaveOnServer = 'Sa�uvaj na server u direktorijum %s';
$strScaleFactorSmall = 'Faktor umanjenja je premali da bi shema stala na jednu stranu';
$strSearch = 'Pretra�ivanje';
$strSearchFormTitle = 'Pretra�ivanje baze';
$strSearchInTables = 'Unutar tabela:';
$strSearchNeedle = 'Rije�i ili vrednosti koje se tra�e (d�oker: "%"):';
$strSearchOption1 = 'bar jednu od rije�i';
$strSearchOption2 = 'sve rije�i';
$strSearchOption3 = 'ta�an izraz';
$strSearchOption4 = 'kao regularni izraz';
$strSearchResultsFor = 'Rezultati pretrage za "<i>%s</i>" %s:';
$strSearchType = 'Tra�i:';
$strSecretRequired = 'Konfiguraciona datoteka zahtjeva tajnu lozinku (blowfish_secret).';
$strSelectADb = 'Izaberite bazu';
$strSelectAll = 'Izaberi sve';
$strSelectFields = 'Izaberi polja (najmanje jedno)';
$strSelectNumRows = 'u upitu';
$strSelectTables = 'Izaberi tabele';
$strSend = 'Sa�uvaj kao datoteku';
$strSent = 'Poslato';
$strServer = 'Server';
$strServerChoice = 'Izbor servera';
$strServerStatus = 'Informacije o toku rada';
$strServerStatusUptime = 'Ovaj MySQL server radi ve� %s. Pokrenut je %s.';
$strServerTabProcesslist = 'Procesi';
$strServerTabVariables = 'Promjenljive';
$strServerTrafficNotes = '<b>Saobra�aj servera</b>: Tabele pokazuju statistike mre�nog saobra�aja na ovom MySQL serveru od njegovog pokretanja.';
$strServerVars = 'Serverske promenljive i pode�avanja';
$strServerVersion = 'Verzija servera';
$strSessionValue = 'Vrijednost sesije';
$strSetEnumVal = 'Ako je polje "enum" ili "set", unesite vrijednosti u formatu: \'a\',\'b\',\'c\'...<br />Ako vam treba obrnuta kosa crta ("\\") ili apostrof ("\'") koristite ih u "izbjegnutom" (escaped) obliku (na primer \'\\\\xyz\' ili \'a\\\'b\').';
$strShow = 'Prika�i';
$strShowAll = 'Prika�i sve';
$strShowColor = 'Prika�i boju';
$strShowDatadictAs = 'Format rije�nika podataka';
$strShowFullQueries = 'Prika�i kompletne upite';
$strShowGrid = 'Prika�i mre�u';
$strShowPHPInfo = 'Prika�i informacije o PHP-u';
$strShowTableDimension = 'Prika�i dimenzije tabele';
$strShowTables = 'Prika�i tabele';
$strShowThisQuery = 'Prika�i ponovo ovaj upit';
$strShowingRecords = 'Prikaz zapisa';
$strSimplifiedChinese = 'Pojednostavljeni kineski';
$strSingly = '(po jednom polju)';
$strSize = 'Veli�ina';
$strSort = 'Sortiranje';
$strSpaceUsage = 'Zauze�e';
$strSplitWordsWithSpace = 'Rije�i se odvajaju razmakom (" ").';
$strStatCheckTime = 'Posljednja provjera';
$strStatCreateTime = 'Napravljeno';
$strStatUpdateTime = 'Posljednja izmjena';
$strStatement = 'Ime';
$strStatus = 'Status';
$strStrucCSV = 'CSV format';
$strStrucData = 'Struktura i podatci';
$strStrucDrop = 'Dodaj \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV za MS Excel';
$strStrucOnly = 'Samo struktura';
$strStructPropose = 'Predlo�i strukturu tabele';
$strStructure = 'Struktura';
$strSubmit = 'Po�alji';
$strSuccess = 'Va� SQL upit je uspe�no izvr�en';
$strSum = 'Ukupno';
$strSwedish = '�vedski';
$strSwitchToTable = 'Pre�i na kopiranu tabelu';

$strTable = 'Tabela';
$strTableComments = 'Komentari tabele';
$strTableEmpty = 'Ima tabele je prazno!';
$strTableHasBeenDropped = 'Tabela %s je odba�ena';
$strTableHasBeenEmptied = 'Tabela %s je ispra�njena';
$strTableHasBeenFlushed = 'Tabela %s je osve�ena';
$strTableMaintenance = 'Radnje na tabeli';
$strTableOfContents = 'Sadr�aj';
$strTableOptions = 'Opcije tabele';
$strTableStructure = 'Struktura tabele';
$strTableType = 'Tip tabele';
$strTables = '%s tabela';
$strTblPrivileges = 'Privilegije vezane za tabele';
$strTextAreaLength = 'Zbog njehove veli�ine, polje<br />mo�da ne�ete mo�i da izmenite';
$strThai = 'Tajlandski ';
$strTheContent = 'Sadr�aj datoteke je dodat u bazu.';
$strTheContents = 'Podatke sadr�ane u tabeli zameni sa podacima iz datoteke koji imaju identi�ne primarne i jedinstvene (unique) klju�eve.';
$strTheTerminator = 'Separator polja u datoteci.';
$strThisHost = 'Ovaj server';
$strThisNotDirectory = 'Ovo nije direktorijum';
$strThreadSuccessfullyKilled = 'Proces %s je uspje�no prekinut.';
$strTime = 'Vrijeme';
$strToggleScratchboard = 'Uklju�uje/isklju�uje scratchboard';
$strTotal = 'ukupno';
$strTotalUC = 'Ukupno';
$strTraditionalChinese = 'Tradicionalni kineski';
$strTraffic = 'Saobra�aj';
$strTransformation_image_jpeg__inline = 'Prikazuje umanjenu sliku na koju je mogu�e kliknuti; opcije: �irina, visina u pikselima (�uva originalni odnos)';
$strTransformation_image_jpeg__link = 'Prikazuje link ka ovoj slici (npr. direktno preuzimanje iz BLOB-a).';
$strTransformation_image_png__inline = 'Prika�i JPEG slike na strani';
$strTransformation_text_plain__dateformat = 'Uzima TIME, TIMESTAMP ili DATETIME polje i formatira ga koriste�i lokalni oblik prikazivanja datuma. Prva opcija je ofset (u satima) koji se dodaje vremenskoj oznaci (podrazumevano: 0). Druga opcija je razli�it format datuma prema parametrima koji su dostupni za PHP-ov strftime().';
$strTransformation_text_plain__external = 'SAMO LINUX: Pokre�e eksternu aplikaciju i popunjava podatke u poljima preko standardnog ulaza. Vra�a standardni izlaz aplikacije. Podrazumevano je Tidy, za lep�i prikaz HTML koda. Zbog sigurnosnih razloga, morate ru�no izmeniti datoteku libraries/transformations/text_plain__external.inc.php i dodati alate koje �elite da koristite. Prva opcija je broj programa koje �elite da koristite, a druga su parametri programa. Ako se tre�i parametar postavi na 1 izlaz �e biti konvertovan koriste�i htmlspecialchars() (podrazumevano je 1). Ako je �etvrti parametar postavljen na 1, NOWRAP �e biti dodato �eliji sa sadr�ajem tako da �e izlaz biti prikazan bez izmena. (podrazumevano 1)';
$strTransformation_text_plain__formatted = '�uva originalno formatiranje polja. Escaping se ne vr�i.';
$strTransformation_text_plain__imagelink = 'Prikazuje sliku i link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je �irina u pikselima, tre�a je visina.';
$strTransformation_text_plain__link = 'Prikazuje link, polje sadr�i naziv datoteke; prva opcija je prefiks kao "http://domain.com/", druga opcija je naslov za link.';
$strTransformation_text_plain__substr = 'Pokazuje samo deo stringa. Prva opcija je ofset koji defini�e gde po�inje izlaz va�eg teksta (podrazumevano 0). Druga opcija je ofset koji pokazuje koliko �e teksta biti prikazano. Ako je nema, sav preostali tekst �e biti prikazan. Tre�a opcija odre�uje koji �e znaci biti dodati izlazu kada se prika�e podstring (podrazumevano: ...) .';
$strTransformation_text_plain__unformatted = 'Prikazuje HTML kod kao HTML entitete. HTML formatiranje se ne prikazuje.';
$strTruncateQueries = 'Prika�i skra�ene upite';
$strTurkish = 'Turski';
$strType = 'Tip';

$strUkrainian = 'Ukrajinski';
$strUncheckAll = 'nijedno';
$strUnicode = 'Unikod';
$strUnique = 'Jedinstveni';
$strUnknown = 'nepoznat';
$strUnselectAll = 'ni�ta';
$strUpdComTab = 'Molimo pogledajte u dokumentaciji kako se a�urira tabela Column_comments';
$strUpdatePrivMessage = 'A�urirali ste privilegije za %s.';
$strUpdateProfileMessage = 'Profil je promjenjen.';
$strUpdateQuery = 'A�uriraj upit';
$strUsage = 'Zauze�e';
$strUseBackquotes = 'Koristi \' za ograni�avanje imena polja';
$strUseHostTable = 'Koristi tabelu hosta';
$strUseTables = 'Koristi tabele';
$strUseTextField = 'Koristi tekst polje';
$strUseThisValue = 'Koristi ovu vrijednost';
$strUser = 'Korisnik';
$strUserAlreadyExists = 'Korisnik %s ve� postoji!';
$strUserEmpty = 'Ime korisnika nije unijeto!';
$strUserName = 'Ime korisnika';
$strUserNotFound = 'Izabrani korisnik nije prona�en u tabeli privilegija.';
$strUserOverview = 'Pregled korisnika';
$strUsersDeleted = 'Izabrani korisnici su uspje�no obrisani.';
$strUsersHavingAccessToDb = 'Korisnici koji imaju pristup &quot;%s&quot;';

$strValidateSQL = 'Provjeri SQL';
$strValidatorError = 'SQL validator nije mogao da bude pokrenut. Proverite da li su instalirane neophodne PHP ekstenzije opisane u  %sdokumentaciji%s.';
$strValue = 'Vrijednost';
$strVar = 'Promjenljiva';
$strViewDump = 'Prika�i sadr�aj (shemu) tabele';
$strViewDumpDB = 'Prika�i sadr�aj (shemu) baze';
$strViewDumpDatabases = 'Prika�i sadr�aj (shemu) baze';

$strWebServerUploadDirectory = 'direkcija za slanje web servera ';
$strWebServerUploadDirectoryError = 'Direkcija koju ste izabrali za slanje nije dostupna';
$strWelcome = 'Dobrodo�li na %s';
$strWestEuropean = 'Zapadnoevropski';
$strWildcard = 'D�oker';
$strWindowNotFound = 'Odredi�nji prozor pretra�iva�a nije mogao da bude a�uriran. Mo�da ste zatvorili mati�ni prozor, ili va� prera�iva� onemogu�ava a�uriranje me�u prozorima zbog sigurnosnih pode�avanja';
$strWithChecked = 'Ozna�eno:';
$strWritingCommentNotPossible = 'Pisanje komentara nije mogu�e';
$strWritingRelationNotPossible = 'Upisivanje relacije nije mogu�e';
$strWrongUser = 'Pogre�no korisni�ko ime/lozinka. Ulaz nije dozvoljen.';

$strXML = 'XML';

$strYes = 'Da';

$strZeroRemovesTheLimit = 'Napomena: Postavljanje ovih opcija na 0 (nulu) uklanja limite.';
$strZip = '"zipovano"';

$strBookmarkAllUsers = 'Let every user access this bookmark';  //to translate
$strBookmarkOptions = 'Bookmark options';  //to translate

$strCheckOverhead = 'Check overheaded';  //to translate
$strConstraintsForDumped = 'Constraints for dumped tables';  //to translate
$strConstraintsForTable = 'Constraints for table';  //to translate
$strCreationDates = 'Creation/Update/Check dates';  //to translate

$strInternalNotNecessary = '* An internal relation is not necessary when it exists also in InnoDB.';  //to translate
$strInternalRelations = 'Internal relations';  //to translate

$strLatexCaption = 'Table caption';  //to translate
$strLatexContent = 'Content of table __TABLE__';  //to translate
$strLatexContinued = '(continued)';  //to translate
$strLatexContinuedCaption = 'Continued table caption';  //to translate
$strLatexIncludeCaption = 'Include table caption';  //to translate
$strLatexLabel = 'Label key';  //to translate
$strLatexStructure = 'Structure of table __TABLE__';  //to translate
$strLogServer = 'Server';  //to translate

$strPrintViewFull = 'Print view (with full texts)';  //to translate

$strSortByKey = 'Sort by key';  //to translate

$strUpgrade = 'You should upgrade to %s %s or later.';  //to translate

$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
?>
