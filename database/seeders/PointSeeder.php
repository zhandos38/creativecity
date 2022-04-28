<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $points = [
            ['1, Абая - Абылайхана, юго-восток', 1, '43.24199933246904,76.94351200407303'],
            ['10, Абая – Гагарина, рп, восток', 10, '43.23890376456545,76.89453543499724'],
            ['100, Гоголя - Байсеитовой, северо-запад', 100, '43.25986809672800,76.94292313557492'],
            ['101, Гоголя - Байсеитовой (Юбилейный), юго-восток', 101, '43.25976508234554,76.94354475811535'],
            ['102, Гоголя - Барибаева, юго-восток', 102, '43.26105264150452,76.96327905498691'],
            ['103, Гоголя - Желтоксан, северо-восток', 103, '43.25955419236057,76.93918446388291'],
            ['104, Гоголя - Кунаева, северо-восток', 104, '43.26033911064264,76.94974458721074'],
            ['105, Гоголя - Пушкина, юго-запад', 105, '43.26043942279917,76.95323289707906'],
            ['107, Достык - Альфараби, северо-запад', 107, '43.22954868128948,76.96016457891609'],
            ['108, Достык – Альфараби, юго-запад', 108, '43.22800600468602,76.96055924364987'],
            ['109, Достык – Богенбай батыра, северо-запад', 109, '43.25408555989422,76.95543699163845'],
            ['11, Абая - Гайдара, юго-восток', 11, '43.23799448457451,76.88554287582922'],
            ['110, Достык - Жамбыла, юго-восток', 110, '43.2485966924431,76.95637072709596'],
            ['111, Достык - Жибек Жолы, северо-запад', 111, '43.26269575699468,76.95394001439871'],
            ['112, Достык - Жибек Жолы (Зелый базар), юго-запад', 112, '43.26256494219546,76.95437537900987'],
            ['113, Достык – Жолдасбекова, восток', 113, '43.23451729804824,76.95864005924535'],
            ['114, Достык - Жолдасбекова, северо-восток', 114, '43.23480709003872,76.95823468459906'],
            ['116, Достык - Кабанбай батыра (Ресей), юго-восток', 116, '43.24972807534555,76.95618320503229'],
            ['117, Достык - Кабанбай бытары, юго-запад', 117, '43.25032410596807,76.95572186508156'],
            ['118, Достык – Омарова, северо-восток', 118, '43.22144366371817,76.9634430987604'],
            ['119, Достык – Омарова, юго-запад', 119, '43.2211780308476,76.96319083799972'],
            ['12, Абая - Достык, северо-запад', 12, '43.24318446650387,76.95492235912789'],
            ['120, Достык - Чайкиной, юго-запад', 120, '43.21595276109824,76.96489971635985'],
            ['121, Достык - Шевченко, юго-запад', 121, '43.24700159901133,76.95621395576646'],
            ['122, Достык – южнее Жолдасбекова,  БЦ Коктем, восток', 122, '43.23054417384063,76.96013659902529'],
            ['123, Достык - южнее Сатпаева, запад', 123, '43.23832734672467,76.9573252573129'],
            ['124, Достык севернее Luxor, запад', 124, '43.20924227912439,76.97031019258681'],
            ['125, Жандосова - Ауэзова, юго-восток', 125, '43.23385204803848,76.90494240597506'],
            ['126, Жандосова - Берегового, юго-восток', 126, '43.21243032835264,76.87002957269688'],
            ['127, Жандосова – большая Алматинка (Плодик), юго-восток', 127, '43.22141354237677,76.88287581597034'],
            ['128, Жандосова - Гагарина, юго-запад', 128, '43.22964719338481,76.8945998080132'],
            ['129, Жандосова – между Навои и Алтынсарина, север', 129, '43.21824099652844,76.87716775000388'],
            ['13, Абая - Достык, юго-запад', 13, '43.24277907349224,76.95648401273056'],
            ['130, Жандосова - Радостовца, северо-запад', 130, '43.22925493423423,76.8935054667355'],
            ['131, Жандосова - Саина, юго-запад', 131, '43.20760642592718,76.86256632169115'],
            ['132, Жандосова - Тлендиева, северо-запад', 132, '43.22157009591194,76.88263491433648'],
            ['133, Жандосова восточнее Яссауи, север', 133, '43.2001040899921,76.84427818962494'],
            ['135, Жандосова западнее Саина (Almaty mall), запад', 135, '43.20737918140846,76.86020303764236'],
            ['136, Жарокова - Дунаевского, юго-запад', 136, '43.20557590415363,76.9036796225278'],
            ['137, Жарокова - Тимирязева, северо-восток', 137, '43.22563365138532,76.90132255532606'],
            ['138, Желтоксан - Богенбай батыра, северо-восток', 138, '43.25282864809483,76.9401016554845'],
            ['139, Желтоксан - Богенбай батыра, северо-запад', 139, '43.25278770831759,76.9399018359866'],
            ['14, Абая - Жандосова, юго-восток', 14, '43.23990631103515,76.91604614257812'],
            ['140, Желтоксан - Казыбек би, северо-восток', 140, '43.25641680148878,76.93956656558304'],
            ['141, Желтоксан - Карасай батыра, северо-восток', 141, '43.25136299990947,76.94025098431365'],
            ['142, Желтоксан - севернее Абая, восток', 142, '43.24310860318978,76.94128085174513'],
            ['143, Желтоксан - севернее Курмангазы, восток', 143, '43.24488903061125,76.94106627502352'],
            ['144, Желтоксан - Шевченко, северо-восток', 144, '43.24612823848893,76.94090534248349'],
            ['145, Желтоксан между Абая и Сатпаева, запад', 145, '43.24033197472766,76.9412164787279'],
            ['146, Желтоксан севернее Сатпаева, восток', 146, '43.23918351422876,76.94184959441978'],
            ['147, Жолдасбекова – Мендикулова, север', 147, '43.23414953530868,76.95313925746785'],
            ['148, Жолдасбекова – Мендикулова, юго-восток', 148, '43.23408772071937,76.95430083322518'],
            ['149, Жолдасбекова – ТРЦ Достык Плаза, север', 149, '43.23428642235297,76.9553337302042'],
            ['15, Абая - Жарокова, северо-запад', 15, '43.23948902816037,76.89908616657796'],
            ['150, Жумабаева - Палладина мкр. Айнабулак, северо-запад', 150, '43.31960854876696,76.91767739941335'],
            ['151, Кабанбай батыра - Масанчи, северо-восток', 151, '43.24873222793562,76.92990425483238'],
            ['153, Кабдолова - Утеген батыра, северо-запад', 153, '43.23956236057448,76.85890975829588'],
            ['154, Капчагайская трасса - Магнум,', 154, '43.36862947363313,76.94855500259341'],
            ['155, Кульджинская трасса, сторона А', 155, '43.32313286211283,77.02882648339585'],
            ['156, Кульджинская трасса, сторона Б', 156, '43.32355338592884,77.02922921778324'],
            ['157, Кунаева - Айтеке би, юго-запад', 157, '43.25835457708479,76.94966543712609'],
            ['158, Кунаева - Казыбек би, северо-восток', 158, '43.25696216318798,76.9501750568386'],
            ['159, Кунаева – Карасай батыра, северо-восток', 159, '43.25211216345376,76.95071149864154'],
            ['16, Абая - Жарокова, юго-восток', 16, '43.23897032533806,76.8996698518994'],
            ['160, Курмангазы - Абылайхана, юго-восток', 160, '43.24435001618064,76.94303754411298'],
            ['161, Курмангазы - Муканова, северо-восток', 161, '43.24259471708549,76.91640054313015'],
            ['162, Курмангазы - Назарбаева, северо-восток', 162, '43.24491255859988,76.9481580356596'],
            ['163, Курмангазы - Чайковского, юго-восток', 163, '43.24404980462143,76.93947840728688'],
            ['164, Майлина - Бекмаханова, юго-восток', 164, '43.33952730820448,76.9838217171147'],
            ['165, Майлина - р.Шарыбулак, юг', 165, '43.34347396894863,76.99766975514436'],
            ['166, Мендикулова - Альфараби, северо-запад', 166, '43.22870290061681,76.95380251999262'],
            ['167, Мендикулова – Бектурова, северо-восток', 167, '43.23269911081807,76.95340097009336'],
            ['168, Момышулы – Абая, северо-восток', 168, '43.21708924507609,76.83948634272691'],
            ['169, Момышулы - Жубанова, юго-запад', 169, '43.22986748291397,76.83322001495304'],
            ['17, Абая - Желтоксан, северо-запад', 17, '43.24214018283442,76.94070620952928'],
            ['170, Момышулы – Ледовый дворец, восток', 170, '43.25988744320401,76.8214076207803'],
            ['171, Момышулы - Магнум, восток', 171, '43.23209023833031,76.83273167234935'],
            ['172, Момышулы - ТРЦ Спутник №1, восток', 172, '43.21141455452562,76.84188527598721'],
            ['173, Момышулы - ТРЦ Спутник №2, восток', 173, '43.21168568360316,76.84175320097441'],
            ['174, Мустафина – Биржана рынок Орбита, северо-запад', 174, '43.19849187553978,76.88042339721572'],
            ['175, Мустафина - Торайгырова рп, север', 175, '43.20250145763053,76.87917201680634'],
            ['176, Мустафина - Торайгырова рп, юг', 176, '43.20255853512979,76.87918913834805'],
            ['177, Навои - Торайгырова, северо-запад', 177, '43.20382497390348,76.88526487465361'],
            ['178, Навои - Торайгырова, юго-восток', 178, '43.2036985210138,76.88561295742956'],
            ['179, Назарбаева - Альфараби, северо-запад', 179, '43.22837571393787,76.94973464414376'],
            ['180, Назарбаева - Бектурова, северо-восток', 180, '43.23240140370856,76.94979418315873'],
            ['181, Назарбаева - Гоголя, юго-восток', 181, '43.25995389431367,76.94615442552504'],
            ['182, Назарбаева - Жамбыла, северо-восток', 182, '43.24819483823258,76.94765109815538'],
            ['183, Назарбаева - Жибек Жолы, северо-восток', 183, '43.2620357799511,76.94591109041278'],
            ['185, Назарбаева - Казыбек би, северо-запад', 185, '43.25670568906786,76.94634363722282'],
            ['186, Назарбаева - Казыбек би, юго-запад', 186, '43.25597382291868,76.94649532558361'],
            ['187, Назарбаева - Курмангазы, юго-запад', 187, '43.24462617645729,76.9478622671159'],
            ['188, Назарбаева - Макатаева, северо-восток', 188, '43.26410959949013,76.94570113220173'],
            ['189, Назарбаева - Макатаева, северо-запад', 189, '43.26412192857407,76.94537134993489'],
            ['19, Абая - западнее Байтурсынова (Променад), юг', 19, '43.24078357493026,76.92524643180832'],
            ['190, Назарбаева - севернее Абая, восток', 190, '43.24357920544829,76.94840479888795'],
            ['192, Назарбаева – Толе би, северо-восток', 192, '43.25524897746156,76.94701005020134'],
            ['193, Назарбаева - Шевченко, северо-восток', 193, '43.24665371822340,76.94804001846303'],
            ['194, Назарбаева - южнее Бектурова, восток', 194, '43.23082706655297,76.94997590421589'],
            ['195, Назарбаева - южнее Сатпаева, запад', 195, '43.23760841347559,76.9488648333734'],
            ['197, Назарбаева северней Шевченко, восток', 197, '43.24687055066506,76.94785257629636'],
            ['198, Назарбаева южней Альфараби, запад', 198, '43.22630190299522,76.95093628607002'],
            ['199, Наурызбай батыра - Жамбыла, северо-запад', 199, '43.24803406169420,76.93692494430495'],
            ['2, Абая - Алтынсарина, северо-запад', 2, '43.22692654626756,76.86140465978781'],
            ['20, Абая - западнее Достык, юг', 20, '43.24281482770169,76.95521087048269'],
            ['200, Наурызбай батыра - Макатаева, северо-запад', 200, '43.2635293865566,76.93480063476518'],
            ['201, Наурызбай батыра - Макатаева, юго-запад', 201, '43.26283939519975,76.93123866119346'],
            ['202, Наурызбай батыра - Толе би, юго-запад', 202, '43.25408837598626,76.93613101043654'],
            ['203, Наурызбай батыра - Гоголя, юго-восток', 203, '43.25913840188514,76.93595934905964'],
            ['204, Пушкина – Маметовой (CHN), юго-запад', 204, '43.26769665867755,76.95193179885914'],
            ['205, Райымбека - Абылайхана, юго-восток', 205, '43.26986715600731,76.94009799756968'],
            ['206, Райымбека - Арзан, север', 206, '43.24146613279077,76.81932669710898'],
            ['207, Райымбека - Байзакова, северо-запад', 207, '43.26627316037672,76.91016165004223'],
            ['208, Райымбека - Байзакова, юго-восток', 208, '43.26591292948637,76.91098261871326'],
            ['209, Райымбека - Назарбаева рп, восток', 209, '43.27042885981065,76.94477845230084'],
            ['21, Абая - западнее Розыбакиева, север', 21, '43.2387947374674,76.88778472183752'],
            ['210, Райымбека - Наурызбай батыра, северо-восток', 210, '43.26998797533117,76.9354027163272'],
            ['211, Райымбека - Саудакент, север', 211, '43.26477707154026,76.90344223632542'],
            ['212, Райымбека - ТРЦ Maxima, юг', 212, '43.26345881908759,76.9004312189476'],
            ['213, Райымбека восточнее Саина, север', 213, '43.24856513973623,76.8433202421489'],
            ['214, Ремизовка южнее Альфараби  въезд развилка, юг', 214, '43.21461117733667,76.92517758757123'],
            ['215, Розыбакиева - Альфараби движение к МЕГЕ, северо-восток', 215, '43.19643802693189,76.89465333023064'],
            ['216, Розыбакиева – Байкадамова, юго-запад', 216, '43.21369632879099,76.89285198518877'],
            ['217, Розыбакиева - Ескараева, северо-запад', 217, '43.20814494167677,76.89357393005898'],
            ['218, Розыбакиева - Жандосова, юго-запад', 218, '43.22713731723255,76.89096261062619'],
            ['219, Розыбакиева - Кожабека, северо-восток', 219, '43.20070762702375,76.89452958638444'],
            ['22, Абая – Кунаева, северо-запад', 22, '43.24285720976264,76.95163472154435'],
            ['220, Розыбакиева - Курмангазы, северо-восток', 220, '43.24068992919453,76.88966610696384'],
            ['221, Розыбакиева - Левитана, северо-восток', 221, '43.20393268656598,76.89442033236081'],
            ['222, Розыбакиева - Левитана (Мега1), юго-запад', 222, '43.20364386416988,76.8939203457422'],
            ['223, Розыбакиева - МЕГА1, восток', 223, '43.20238762288318,76.89443875350902'],
            ['224, Розыбакиева - МЕГА2, восток', 224, '43.20092775147336,76.89463187255777'],
            ['225, Розыбакиева - севернее Абая, восток', 225, '43.23717869640186,76.89021159210107'],
            ['226, Розыбакиева - Тимирязева, юго-запад', 226, '43.22422993750924,76.89149233093437'],
            ['227, Розыбакиева - Толе би, северо-восток', 227, '43.25129656592693,76.88828040161054'],
            ['228, Розыбакиева – Утепова, северо-запад', 228, '43.21882350581570,76.89226528175377'],
            ['229, Розыбакиева - Шевченко, запад', 229, '43.24253759705733,76.88905645182236'],
            ['23, Абая – Манаса рп (CHN), восток', 23, '43.23982934378164,76.9085687525632'],
            ['230, Розыбакиева - Оптовка, юго-восток', 230, '43.25509214060305,76.88770104446384'],
            ['231, Рыcкулова - Жангельдина (Магнум), юго-запад', 231, '43.29430584666064,76.95308437834996'],
            ['233, Рыскулова – Саина, северо-восток', 233, '43.25816659964353,76.84437118722272'],
            ['236, Саина - Аскарова, северо-восток', 236, '43.19736425664291,76.87200475730761'],
            ['237, Саина - Жандосова, северо-запад', 237, '43.20801566695004,76.86262424268308'],
            ['238, Саина - Кабдолова, северо-запад', 238, '43.23506438145569,76.84087098314939'],
            ['239, Саина – Кабдолова, юго-восток', 239, '43.23393936523401,76.84205419642656'],
            ['24, Абая - Масанчи, северо-восток', 24, '43.2415034434758,76.93170396339632'],
            ['240, Саина – Райымбека, юго-восток', 240, '43.24380924512571,76.83824733406452'],
            ['241, Саина - Рыскулбекова, северо-восток', 241, '43.20454679190831,76.86680397238966'],
            ['242, Саина - Рыскулбекова, северо-запад', 242, '43.2043354311119,76.8664582005504'],
            ['243, Саина - Толе би, юго-восток', 243, '43.24084966001307,76.83944273986698'],
            ['244, Саина - Толе би, северо-запад', 244, '43.24128890552102,76.83768321075375'],
            ['245, Саина - Улугбека, северо-запад', 245, '43.22760392695062,76.84442986250494'],
            ['246, Саина - Улугбека, юго запад', 246, '43.22621853256246,76.84536520042738'],
            ['247, Саина южнее Шаляпина, запад', 247, '43.21245354074123,76.85765650415425'],
            ['248, Сатпаева - Ауэзова, северо-восток', 248, '43.23575103881861,76.90473843612637'],
            ['249, Сатпаева – Брусиловского, юго-восток', 249, '43.23365656112976,76.87956858672905'],
            ['250, Сатпаева - Брусиловского, юго-запад', 250, '43.23361098820194,76.87904617690322'],
            ['251, Сатпаева - Валиханова, северо-запад', 251, '43.23929658678595,76.95284653701671'],
            ['252, Сатпаева - Гагарина, юго-запад', 252, '43.23469988521493,76.89443875350918'],
            ['253, Сатпаева - Достык, юго-восток', 253, '43.23907329938328,76.9576034750066'],
            ['254, Сатпаева - Егизбаева, юго-восток', 254, '43.23404094392583,76.88602734603859'],
            ['255, Сатпаева - Жарокова, северо-восток', 255, '43.23545295205329,76.90014649429322'],
            ['256, Сатпаева - Желтоксан, юго-запад', 256, '43.23783760330396,76.94143105545018'],
            ['257, Сатпаева - м/у Брусиловского и Туркебаева, юг', 257, '43.23369578134959,76.88049126663178'],
            ['258, Сатпаева - Манаса, северо-запад', 258, '43.23617463247093,76.9089012245177'],
            ['259, Сатпаева - Манаса, юго-восток', 259, '43.23562552864791,76.9092767337798'],
            ['26, Абая - Наурызбай батыра (CHN), юг', 26, '43.24157338103392,76.93802689846979'],
            ['260, Сатпаева – Манаса, юго-запад', 260, '43.2357353502627,76.90894413986176'],
            ['261, Сатпаева - Масанчи, северо-запад', 261, '43.23761796805903,76.9293503860471'],
            ['262, Сатпаева - Масанчи, юго-восток', 262, '43.23736695613922,76.93188239135694'],
            ['263, Сатпаева - Розыбакиева, северо-запад', 263, '43.23482539740178,76.88986826934793'],
            ['264, Сатпаева - Розыбакиева, юго-запад', 264, '43.2342292133543,76.8897395233154'],
            ['265, Сатпаева - Сейфуллина, юго-восток', 265, '43.23754171813563,76.93491005232025'],
            ['266, Сатпаева - Тургут Озала, северо-запад', 266, '43.23432334814900,76.88283015289292'],
            ['267, Сатпаева - Тургут Озала, юго-восток', 267, '43.23397818785603,76.88343096771223'],
            ['268, Сатпаева - Туркебаева (CHN), юго-восток', 268, '43.23380652704769,76.88124998773915'],
            ['269, Северное кольцо - АДЕМ 3, северо-восток', 269, '43.28107406505403,76.88761531074819'],
            ['270, Сейфуллина - Айтеке би, юго-восток', 270, '43.25722149856108,76.93253628478234'],
            ['271, Сейфуллина - Акан серы, северо-восток', 271, '43.30846299686762,76.93973726078319'],
            ['272, Сейфуллина - Богенбай батыра, северо-восток', 272, '43.25284932964706,76.94011140861467'],
            ['273, Сейфуллина - Богенбай батыра, северо-запад', 273, '43.25233958758981,76.93284262218472'],
            ['274, Сейфуллина - Гоголя, юго-запад, юго-запад', 274, '43.25895639850635,76.93200870553328'],
            ['275, Сейфуллина - Жамбыла, юго-восток', 275, '43.24659097475560,76.9340067008967'],
            ['276, Сейфуллина - Жансугурова, северо-восток', 276, '43.28493536173745,76.93804763839273'],
            ['277, Сейфуллина - Кабанбай батыра (Риксос), северо-запад', 277, '43.24935381969944,76.93321739374399'],
            ['278, Сейфуллина - Кабанбай батыра, юго-восток', 278, '43.24855168209778,76.93375993766755'],
            ['279, Сейфуллина - Казыбек би, юго-восток', 279, '43.2554771435355,76.93285371955383'],
            ['28, Абая – р. Есентай, юго-восток', 28, '43.24034659710632,76.9199839339618'],
            ['280, Сейфуллина - Курмангазы, северо-восток', 280, '43.24385340407105,76.93424809970841'],
            ['281, Сейфуллина – Макатаева, северо-восток', 281, '43.26325158107814,76.93197726059908'],
            ['283, Сейфуллина - Сатпаева, юго-запад', 283, '43.23749246185711,76.93475771942101'],
            ['284, Сейфуллина - севернее Макатаева, восток', 284, '43.26431355471439,76.9318027329625'],
            ['285, Сейфуллина - Толе би, юго-запад', 285, '43.25390113250830,76.93323769212982'],
            ['286, Сейфуллина - Шолохова, северо-восток', 286, '43.33622873043351,76.94703864645155'],
            ['287, Сейфуллина - южнее Сатпаева ТЦ Форум, запад', 287, '43.23648840589457,76.93615246810752'],
            ['289, Сейфуллина - южнее Шевченко, запад', 289, '43.24464476579792,76.93373899802256'],
            ['29, Абая – Розыбакиева, юго-восток', 29, '43.23826943230014,76.8902290121878'],
            ['290, Сейфуллина северней Тимирязева (ТРЦ Forum), запад', 290, '43.23378991646973,76.9363241294861'],
            ['291, Сейфуллина южнее Абая, восток', 291, '43.24011610789323,76.93479384781756'],
            ['292, Сейфуллина южнее Абая, запад', 292, '43.24022215893598,76.9341354469299'],
            ['293, Сейфуллина южнее Сатпаева, восток', 293, '43.23648840390152,76.93619538345321'],
            ['294, Сулейменова - Пятницкого, северо-запад', 294, '43.21290324484786,76.8777242119943'],
            ['296, Суюнбая - Райымбека, северо-восток', 296, '43.2713235224291,76.95210308671234'],
            ['297, Суюнбая - Райымбека, северо-запад', 297, '43.27180866037103,76.95020724334691'],
            ['298, Суюнбая - Хмельницкого, запад', 298, '43.32139108071057,76.95811179359137'],
            ['299, Суюнбая - Шешена, юго-запад', 299, '43.27624176415686,76.94823005110685'],
            ['3, Абая – Алтынсарина, юго-восток', 3, '43.22692654147282,76.8635504270008'],
            ['30, Абая - Саина, северо-запад', 30, '43.21974369355442,76.8500726382194'],
            ['300, Тимирязева - западней Ауэзова, юг', 300, '43.22557873418607,76.90420044999955'],
            ['301, Тимирязева - Ауэзова, юго-восток', 301, '43.22582615060533,76.90672695961547'],
            ['302, Тимирязева - Байзакова, северо-запад', 302, '43.22657684800889,76.91569293425106'],
            ['303, Тимирязева – Байзакова, юго-восток', 303, '43.22649398493333,76.9161110023494'],
            ['304, Тимирязева - Байтурсынова, юго-запад', 304, '43.23106656453676,76.93432147843934'],
            ['305, Тимирязева - Весновка, северо-запад', 305, '43.22694584188255,76.92431403090701'],
            ['306, Тимирязева - восточнее Ауэзова, север', 306, '43.22598460582588,76.90672213198341'],
            ['308, Тимирязева - Жандосова, восток', 308, '43.22455360364778,76.88738980649934'],
            ['309, Тимирязева – Жарокова, северо-запад', 309, '43.22561241340083,76.90092942942795'],
            ['31, Абая - Тлендиева, северо-восток', 31, '43.23660137656376,76.8760276942676'],
            ['310, Тимирязева - западней Ауэзова, север', 310, '43.22587653250826,76.90393644103402'],
            ['311, Тимирязева - КАЗНУ, юг', 311, '43.22669796876838,76.9210355381009'],
            ['313, Тимирязева - Маркова, северо-запад', 313, '43.22920848775271,76.93133522071824'],
            ['314, Тимирязева - Радостовца, северо-запад', 314, '43.22513395954925,76.89420850821503'],
            ['316, Тимирязева - Сейфуллина, юго-запад', 316, '43.23244063312573,76.93642068900732'],
            ['318, Толе би – Абдуллиных, юго-восток', 318, '43.25578222016877,76.96043076729393'],
            ['319, Толе би - Абылайхана, юго-восток', 319, '43.25452752456805,76.94173146286002'],
            ['32, Абая - Тлендиева, северо-запад', 32, '43.23564932548132,76.87550993883346'],
            ['320, Толе би – Амангельды, северо-запад', 320, '43.25394781508914,76.93097987645383'],
            ['321, Толе би - Байзакова, северо-восток', 321, '43.25273130340554,76.91163085605803'],
            ['322, Толе би - Байтурсынова, северо-запад', 322, '43.25365710993446,76.92540217437622'],
            ['323, Толе би - Байтурсынова, юго-восток', 323, '43.25330417245417,76.92596007385197'],
            ['324, Толе би - Байтурсынова, юго-запад', 324, '43.25326161475126,76.92550585660578'],
            ['326, Толе би - Гагарина, юго-восток', 326, '43.25098287007702,76.89433146514864'],
            ['327, Толе би - Достык, северо-восток', 327, '43.25568811977137,76.95555020370405'],
            ['328, Толе би – Достык, северо-запад', 328, '43.25575085298651,76.95492793121309'],
            ['329, Толе би - Жарокова, юго-восток', 329, '43.25130781810585,76.89809790927615'],
            ['33, Абая - Тлендиева, юго-запад', 33, '43.23573535076686,76.87540579833956'],
            ['330, Толе би - Желтоксан, юго-восток', 330, '43.25437068694067,76.94012213745047'],
            ['331, Толе би – Жумалиева, северо-восток', 331, '43.25280409600818,76.91335882006206'],
            ['332, Толе би - западнее Ауэзова, юг', 332, '43.25153068634329,76.90047741950318'],
            ['333, Толе би - западнее Розыбакиева, север', 333, '43.25095150126824,76.88643504180834'],
            ['334, Толе би - Кайырбекова, юго-восток', 334, '43.25584495390954,76.96215916671731'],
            ['335, Толе би – Кунаева, северо-запад', 335, '43.25535755337669,76.94987861010364'],
            ['336, Толе би – Масанчи, северо-восток', 336, '43.25382247158779,76.92942050020089'],
            ['337, Толе би – Масанчи, юго-восток', 337, '43.25361459666979,76.92975169401012'],
            ['338, Толе би - Момышулы, северо-запад', 338, '43.23935662237350,76.8288949055603'],
            ['339, Толе би - Муканова, юго-восток', 339, '43.25258269587695,76.91523123779267'],
            ['34, Абая - Центральный стадион, юг', 34, '43.24059803529928,76.92401827648894'],
            ['340, Толе би - Назарбаева, северо-запад', 340, '43.255252731007,76.94624912864626'],
            ['341, Толе би - Розыбакиева , юго-запад', 341, '43.25063780434774,76.88776541748015'],
            ['342, Толе би - Сайран, север', 342, '43.24857345103851,76.86899303131382'],
            ['343, Толе би – Сейфуллина, юго-восток', 343, '43.25378898243776,76.93320184706344'],
            ['344, Толе би - Тлендиева, северо-восток', 344, '43.24935163279406,76.87261630096364'],
            ['345, Толе би - Тургут Озала, юго-восток', 345, '43.25021451821606,76.88133046854422'],
            ['346, Толе би - Тургут Озала, юго-запад', 346, '43.25000182239805,76.880473651669'],
            ['347, Толе би - Туркебаева, северо-запад', 347, '43.25037767191255,76.8783599519018'],
            ['348, Толе би - Туркебаева, юго-восток', 348, '43.25004177619343,76.87879611053464'],
            ['349, Толе би - Утеген батыра, северо-восток', 349, '43.24617804825480,76.8561460306939'],
            ['35, Абая - Цирк, юг', 35, '43.24017776653392,76.91701406497654'],
            ['350, Толе би - Утеген батыра, северо-запад', 350, '43.24594460936995,76.85500398379453'],
            ['352, Толе би – Шарипова, северо-запад', 352, '43.25345598655981,76.92192603149398'],
            ['353, Толе би – Шарипова, юго-восток', 353, '43.253092514867,76.92253540034855'],
            ['354, Хаджимукана - Назарбаева, северо-восток', 354, '43.22440599706375,76.95339824852971'],
            ['355, Шаляпина - Момышулы, северо-запад', 355, '43.20964411985561,76.84185539734632'],
            ['356, Шаляпина - Момышулы, юго-восток', 356, '43.20936029441676,76.84285921333266'],
            ['357, Шевченко - Байтурсынова, северо-запад', 357, '43.24517922642781,76.92662526168745'],
            ['358, Шевченко - Наурызбай батыра, северо-запад', 358, '43.24586600797178,76.93699016555775'],
            ['359, Шевченко - Сейфуллина, северо-запад', 359, '43.24564981240913,76.93347025909416'],
            ['360, Шолохова - Зорге ТРЦ Март №2, восток', 360, '43.33552232514337,76.95313683957345'],
            ['361, Бухар Жырау - Весновка, рп, восток', 361, '43.23210971459543,76.92189496196843'],
            ['362, Ремизовка – Трамплины/парковка Ессентай въезд, юг', 362, '43.21546464223654,76.92632101089447'],
            ['364, Альфараби - Ботанический сад, север', 364, '43.21355086330167,76.92151803549143'],
            ['365, Альфараби - Есентай (Esentai mall), северо-запад', 365, '43.22004459007375,76.9315283397672'],
            ['366, Альфараби - Назарбаева, юго-запад', 366, '43.22765345627075,76.94865156211814'],
            ['367, Альфараби - Ремизовка, северо-восток', 367, '43.21621073359284,76.92547602097378'],
            ['368, Альфараби восточнее Мубарак, север', 368, '43.21128737742044,76.91865373649574'],
            ['369, Сатпаева - Жарокова, юго-запад', 369, '43.23504504203961,76.89959888003122'],
            ['37, Абая между Утеген батыра и Алтынсарина, север', 37, '43.22955562790462,76.86491652706066'],
            ['370, Толе би - Сейфуллина, северо-запад', 370, '43.25424521470536,76.93226862945549'],
            ['371, Майлина - Шарыбулак, северо-восток', 371, '43.34513376860413,77.00253435317983'],
            ['38, Абылайхана - Абая, северо-запад', 38, '43.24251002557283,76.94291561669102'],
            ['39, Абылайхана - Жибек Жолы, юго-запад', 39, '43.26109157881370,76.94056201972919'],
            ['4, Абая - Алтынсарина, юго-запад', 4, '43.22647829361676,76.8624882797239'],
            ['40, Абылайхана – Кабанбай батыра, северо-запад', 40, '43.24953030666115,76.9420434664711'],
            ['41, Абылайхана - Карасай батыра, северо-восток', 41, '43.25136042926021,76.94205328203887'],
            ['42, Абылайхана - Карасай батыра, юго-запад', 42, '43.25085614390261,76.94188191049055'],
            ['43, Абылайхана - южнее Гоголя, запад', 43, '43.25901044439995,76.94074489779516'],
            ['44, Абылайхана – южнее Курмангазы, восток', 44, '43.24398623278917,76.9429109656448'],
            ['45, Адем 1, восток', 45, '43.27579428492966,76.88677996438918'],
            ['46, Адем 2, восток', 46, '43.27954748837639,76.88737751645968'],
            ['47, Алтынсарина - Куанышбаева, северо-восток', 47, '43.22976013876665,76.85842115579736'],
            ['48, Алтынсарина - Шаляпина, юго-запад', 48, '43.22159136477951,76.87005210165252'],
            ['49, Альфараби - Аскарова, юг вверх', 49, '43.19691100901259,76.87200708265841'],
            ['5, Абая - Ауэзова, северо-восток', 5, '43.23990981948464,76.90444807726975'],
            ['50, Альфараби - восточнее Сейфуллина, север', 50, '43.22808539488476,76.9436414774969'],
            ['51, Альфараби – Гагарина, север', 51, '43.19792848569844,76.89946756335634'],
            ['52, Альфараби - Гагарина (Казахфильм), юго-запад', 52, '43.1982998272662,76.90106535720429'],
            ['53, Альфараби - Гольфклуб, юг', 53, '43.210165747291,76.91777700507473'],
            ['56, Альфараби - Жамакаева, юго-восток', 56, '43.22444808611379,76.93883635388427'],
            ['57, Альфараби - Жарокова, северо-запад', 57, '43.19955955326009,76.90260807626409'],
            ['58, Альфараби – западнее Назарбаева, север', 58, '43.22839195504828,76.94962800816309'],
            ['6, Абая - Байзакова, рп, восток', 6, '43.24012901728707,76.91198727060036'],
            ['60, Альфараби - Исиналиева, юго-восток', 60, '43.20116354727589,76.90881726876235'],
            ['61, Альфараби - Лексус центр, юг', 61, '43.21505709063591,76.92449082370976'],
            ['62, Альфараби – Мендикулова, юго-восток', 62, '43.22823662989069,76.95495834786003'],
            ['63, Альфараби - Мустафина 1, северо-запад', 63, '43.19510078113378,76.88179331229158'],
            ['65, Альфараби - Розыбакиева, юго-запад', 65, '43.19439261119584,76.89173351482724'],
            ['66, Альфараби - Сейфуллина островок, северо-восток', 66, '43.22621091858021,76.94059432820073'],
            ['67, Альфараби – Сейфуллина, юго-восток', 67, '43.22657181483251,76.94205344990503'],
            ['68, Альфараби - Сейфуллина, юго-запад', 68, '43.22550481025534,76.94046705619617'],
            ['69, Альфараби - Сыргабекова, юго-восток', 69, '43.20420667711907,76.9136731048755'],
            ['70, Альфараби – Ходжанова №1, юго-запад', 70, '43.20544857918133,76.91397903284758'],
            ['72, Альфараби - Шашкина, юго-восток', 72, '43.2225871765161,76.93609347330988'],
            ['73, Альфараби восточнее Гагарина, юг', 73, '43.19866257564625,76.90171731844578'],
            ['74, Альфараби восточнее Ходжанова  (Мубарак), север', 74, '43.20912224351321,76.91645806535546'],
            ['75, Альфараби западнее Гагарина, юг', 75, '43.19621512730489,76.89806634643338'],
            ['76, Аскарова - Садыкова, запад', 76, '43.1828631145677,76.86858981178233'],
            ['77, Ауэзова - Мынбаева, юго-запад', 77, '43.2373219277204,76.90401880186405'],
            ['78, Ауэзова - севернее Тимирязева, запад', 78, '43.22644894852053,76.90558521192882'],
            ['79, Ауэзова - Толе би, юго-запад', 79, '43.25165545560806,76.90219864303222'],
            ['8, Абая - Байсеитовой, юго-запад', 8, '43.24204142114232,76.9445382502742'],
            ['80, Ауэзова - Шевченко, северо-восток', 80, '43.24356603852890,76.90367381392038'],
            ['81, Ауэзова - Шевченко, юго-запад', 81, '43.243326337783,76.90330337963712'],
            ['82, Байтурсынова - Абая, юго-запад', 82, '43.24037841021968,76.92716182545439'],
            ['83, Байтурсынова - Бухар Жырау, северо-запад', 83, '43.23648777957903,76.92782701328956'],
            ['84, Байтурсынова – Кабанбай батыра (CHN), северо-восток', 84, '43.24848428778331,76.92644254862276'],
            ['85, Байтурсынова Курмангазы, северо-восток', 85, '43.24335834084071,76.92719413392588'],
            ['86, Восточная обводная дорога №1, северная', 86, '43.23207739383206,76.96930885109226'],
            ['87, Восточная обводная дорога №2, северная', 87, '43.24781901706166,76.98005005553817'],
            ['88, Восточная обводная дорога №3, северная', 88, '43.26677910031367,76.9861339284497'],
            ['89, Восточная обводная дорога №4, северная', 89, '43.28072533903591,76.98596962649377'],
            ['9, Абая – Байтурсынова, северо-запад', 9, '43.24128765519632,76.92602469079536'],
            ['91, Восточная обводная дорога №2, южная', 91, '43.27336076990060,76.98434213114294'],
            ['92, Восточная обводная дорога №3, южная', 92, '43.26642103023505,76.98540767732607'],
            ['93, Восточная обводная дорога №4, южная', 93, '43.24153433263692,76.97396544792797'],
            ['94, Восточная обводная дорога №5, южная', 94, '43.23707006296212,76.97026698984499'],
            ['95, Гагарина – Левитана, северо-восток', 95, '43.20390276101568,76.89921933728978'],
            ['96, Гагарина - Магнум, северо-запад', 96, '43.20671726121515,76.89860337767942'],
            ['97, Гагарина - Утепова, юго-запад', 97, '43.21883104409795,76.89713667198772'],
            ['98, Гагарина - Ходжанова, северо-запад', 98, '43.21051275898281,76.8982484722539'],
            ['99, Гоголя - Байзакова, северо-восток', 99, '43.25777518382318,76.91087815570455'],
        ];

        foreach ($points as $point){
            $coordinates = explode(',', $point[2]);
            Point::create([
                'title_ru' => $point[0],
                'title_kz' => $point[0],
                'title_en' => $point[0],
                'number' => $point[1],
                'lang' => $coordinates[0],
                'lat' => $coordinates[1],
            ]);
        }
    }
}
