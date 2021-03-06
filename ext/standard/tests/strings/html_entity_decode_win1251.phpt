--TEST--
Translation of HTML entities for encoding WIN-1251
--FILE--
<?php
$arr = array(
0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
0x2020 => array(0x86, "DAGGER"),
0x2021 => array(0x87, "DOUBLE DAGGER"),
0x20AC => array(0x88, "EURO SIGN"),
0x2030 => array(0x89, "PER MILLE SIGN"),
0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
0x2022 => array(0x95, "BULLET"),
0x2013 => array(0x96, "EN DASH"),
0x2014 => array(0x97, "EM DASH"),
//0x98	      	#UNDEFINED
0x2122 => array(0x99, "TRADE MARK SIGN"),
0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
0x00A0 => array(0xA0, "NO-BREAK SPACE"),
0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
0x00A4 => array(0xA4, "CURRENCY SIGN"),
0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
0x00A6 => array(0xA6, "BROKEN BAR"),
0x00A7 => array(0xA7, "SECTION SIGN"),
0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x00AC => array(0xAC, "NOT SIGN"),
0x00AD => array(0xAD, "SOFT HYPHEN"),
0x00AE => array(0xAE, "REGISTERED SIGN"),
0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
0x00B0 => array(0xB0, "DEGREE SIGN"),
0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
0x00B5 => array(0xB5, "MICRO SIGN"),
0x00B6 => array(0xB6, "PILCROW SIGN"),
0x00B7 => array(0xB7, "MIDDLE DOT"),
0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
0x2116 => array(0xB9, "NUMERO SIGN"),
0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
);

$res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
echo "Special test for &#x98; (shouldn't decode):\n";
echo $res,"\n\n";

foreach ($arr as $u => $v) {
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $d = unpack("H*", $res);
    echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);

    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    if ($res[0] != "&" || $res[1] != "#")
        $res = unpack("H*", $res)[1];
    echo sprintf("%s => %s\n\n", $ent, $res);
}
?>
--EXPECT--
Special test for &#x98; (shouldn't decode):
&#x98;

CYRILLIC CAPITAL LETTER DJE: &#x402; => 80
&#x80; => &#x80;

CYRILLIC CAPITAL LETTER GJE: &#x403; => 81
&#x81; => &#x81;

SINGLE LOW-9 QUOTATION MARK: &#x201A; => 82
&#x82; => &#x82;

CYRILLIC SMALL LETTER GJE: &#x453; => 83
&#x83; => &#x83;

DOUBLE LOW-9 QUOTATION MARK: &#x201E; => 84
&#x84; => &#x84;

HORIZONTAL ELLIPSIS: &#x2026; => 85
&#x85; => &#x85;

DAGGER: &#x2020; => 86
&#x86; => &#x86;

DOUBLE DAGGER: &#x2021; => 87
&#x87; => &#x87;

EURO SIGN: &#x20AC; => 88
&#x88; => &#x88;

PER MILLE SIGN: &#x2030; => 89
&#x89; => &#x89;

CYRILLIC CAPITAL LETTER LJE: &#x409; => 8a
&#x8A; => &#x8A;

SINGLE LEFT-POINTING ANGLE QUOTATION MARK: &#x2039; => 8b
&#x8B; => &#x8B;

CYRILLIC CAPITAL LETTER NJE: &#x40A; => 8c
&#x8C; => &#x8C;

CYRILLIC CAPITAL LETTER KJE: &#x40C; => 8d
&#x8D; => &#x8D;

CYRILLIC CAPITAL LETTER TSHE: &#x40B; => 8e
&#x8E; => &#x8E;

CYRILLIC CAPITAL LETTER DZHE: &#x40F; => 8f
&#x8F; => &#x8F;

CYRILLIC SMALL LETTER DJE: &#x452; => 90
&#x90; => &#x90;

LEFT SINGLE QUOTATION MARK: &#x2018; => 91
&#x91; => &#x91;

RIGHT SINGLE QUOTATION MARK: &#x2019; => 92
&#x92; => &#x92;

LEFT DOUBLE QUOTATION MARK: &#x201C; => 93
&#x93; => &#x93;

RIGHT DOUBLE QUOTATION MARK: &#x201D; => 94
&#x94; => &#x94;

BULLET: &#x2022; => 95
&#x95; => &#x95;

EN DASH: &#x2013; => 96
&#x96; => &#x96;

EM DASH: &#x2014; => 97
&#x97; => &#x97;

TRADE MARK SIGN: &#x2122; => 99
&#x99; => &#x99;

CYRILLIC SMALL LETTER LJE: &#x459; => 9a
&#x9A; => &#x9A;

SINGLE RIGHT-POINTING ANGLE QUOTATION MARK: &#x203A; => 9b
&#x9B; => &#x9B;

CYRILLIC SMALL LETTER NJE: &#x45A; => 9c
&#x9C; => &#x9C;

CYRILLIC SMALL LETTER KJE: &#x45C; => 9d
&#x9D; => &#x9D;

CYRILLIC SMALL LETTER TSHE: &#x45B; => 9e
&#x9E; => &#x9E;

CYRILLIC SMALL LETTER DZHE: &#x45F; => 9f
&#x9F; => &#x9F;

NO-BREAK SPACE: &#xA0; => a0
&#xA0; => a0

CYRILLIC CAPITAL LETTER SHORT U: &#x40E; => a1
&#xA1; => &#xA1;

CYRILLIC SMALL LETTER SHORT U: &#x45E; => a2
&#xA2; => &#xA2;

CYRILLIC CAPITAL LETTER JE: &#x408; => a3
&#xA3; => &#xA3;

CURRENCY SIGN: &#xA4; => a4
&#xA4; => a4

CYRILLIC CAPITAL LETTER GHE WITH UPTURN: &#x490; => a5
&#xA5; => &#xA5;

BROKEN BAR: &#xA6; => a6
&#xA6; => a6

SECTION SIGN: &#xA7; => a7
&#xA7; => a7

CYRILLIC CAPITAL LETTER IO: &#x401; => a8
&#xA8; => &#xA8;

COPYRIGHT SIGN: &#xA9; => a9
&#xA9; => a9

CYRILLIC CAPITAL LETTER UKRAINIAN IE: &#x404; => aa
&#xAA; => &#xAA;

LEFT-POINTING DOUBLE ANGLE QUOTATION MARK: &#xAB; => ab
&#xAB; => ab

NOT SIGN: &#xAC; => ac
&#xAC; => ac

SOFT HYPHEN: &#xAD; => ad
&#xAD; => ad

REGISTERED SIGN: &#xAE; => ae
&#xAE; => ae

CYRILLIC CAPITAL LETTER YI: &#x407; => af
&#xAF; => &#xAF;

DEGREE SIGN: &#xB0; => b0
&#xB0; => b0

PLUS-MINUS SIGN: &#xB1; => b1
&#xB1; => b1

CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I: &#x406; => b2
&#xB2; => &#xB2;

CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I: &#x456; => b3
&#xB3; => &#xB3;

CYRILLIC SMALL LETTER GHE WITH UPTURN: &#x491; => b4
&#xB4; => &#xB4;

MICRO SIGN: &#xB5; => b5
&#xB5; => b5

PILCROW SIGN: &#xB6; => b6
&#xB6; => b6

MIDDLE DOT: &#xB7; => b7
&#xB7; => b7

CYRILLIC SMALL LETTER IO: &#x451; => b8
&#xB8; => &#xB8;

NUMERO SIGN: &#x2116; => b9
&#xB9; => &#xB9;

CYRILLIC SMALL LETTER UKRAINIAN IE: &#x454; => ba
&#xBA; => &#xBA;

RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK: &#xBB; => bb
&#xBB; => bb

CYRILLIC SMALL LETTER JE: &#x458; => bc
&#xBC; => &#xBC;

CYRILLIC CAPITAL LETTER DZE: &#x405; => bd
&#xBD; => &#xBD;

CYRILLIC SMALL LETTER DZE: &#x455; => be
&#xBE; => &#xBE;

CYRILLIC SMALL LETTER YI: &#x457; => bf
&#xBF; => &#xBF;

CYRILLIC CAPITAL LETTER A: &#x410; => c0
&#xC0; => &#xC0;

CYRILLIC CAPITAL LETTER BE: &#x411; => c1
&#xC1; => &#xC1;

CYRILLIC CAPITAL LETTER VE: &#x412; => c2
&#xC2; => &#xC2;

CYRILLIC CAPITAL LETTER GHE: &#x413; => c3
&#xC3; => &#xC3;

CYRILLIC CAPITAL LETTER DE: &#x414; => c4
&#xC4; => &#xC4;

CYRILLIC CAPITAL LETTER IE: &#x415; => c5
&#xC5; => &#xC5;

CYRILLIC CAPITAL LETTER ZHE: &#x416; => c6
&#xC6; => &#xC6;

CYRILLIC CAPITAL LETTER ZE: &#x417; => c7
&#xC7; => &#xC7;

CYRILLIC CAPITAL LETTER I: &#x418; => c8
&#xC8; => &#xC8;

CYRILLIC CAPITAL LETTER SHORT I: &#x419; => c9
&#xC9; => &#xC9;

CYRILLIC CAPITAL LETTER KA: &#x41A; => ca
&#xCA; => &#xCA;

CYRILLIC CAPITAL LETTER EL: &#x41B; => cb
&#xCB; => &#xCB;

CYRILLIC CAPITAL LETTER EM: &#x41C; => cc
&#xCC; => &#xCC;

CYRILLIC CAPITAL LETTER EN: &#x41D; => cd
&#xCD; => &#xCD;

CYRILLIC CAPITAL LETTER O: &#x41E; => ce
&#xCE; => &#xCE;

CYRILLIC CAPITAL LETTER PE: &#x41F; => cf
&#xCF; => &#xCF;

CYRILLIC CAPITAL LETTER ER: &#x420; => d0
&#xD0; => &#xD0;

CYRILLIC CAPITAL LETTER ES: &#x421; => d1
&#xD1; => &#xD1;

CYRILLIC CAPITAL LETTER TE: &#x422; => d2
&#xD2; => &#xD2;

CYRILLIC CAPITAL LETTER U: &#x423; => d3
&#xD3; => &#xD3;

CYRILLIC CAPITAL LETTER EF: &#x424; => d4
&#xD4; => &#xD4;

CYRILLIC CAPITAL LETTER HA: &#x425; => d5
&#xD5; => &#xD5;

CYRILLIC CAPITAL LETTER TSE: &#x426; => d6
&#xD6; => &#xD6;

CYRILLIC CAPITAL LETTER CHE: &#x427; => d7
&#xD7; => &#xD7;

CYRILLIC CAPITAL LETTER SHA: &#x428; => d8
&#xD8; => &#xD8;

CYRILLIC CAPITAL LETTER SHCHA: &#x429; => d9
&#xD9; => &#xD9;

CYRILLIC CAPITAL LETTER HARD SIGN: &#x42A; => da
&#xDA; => &#xDA;

CYRILLIC CAPITAL LETTER YERU: &#x42B; => db
&#xDB; => &#xDB;

CYRILLIC CAPITAL LETTER SOFT SIGN: &#x42C; => dc
&#xDC; => &#xDC;

CYRILLIC CAPITAL LETTER E: &#x42D; => dd
&#xDD; => &#xDD;

CYRILLIC CAPITAL LETTER YU: &#x42E; => de
&#xDE; => &#xDE;

CYRILLIC CAPITAL LETTER YA: &#x42F; => df
&#xDF; => &#xDF;

CYRILLIC SMALL LETTER A: &#x430; => e0
&#xE0; => &#xE0;

CYRILLIC SMALL LETTER BE: &#x431; => e1
&#xE1; => &#xE1;

CYRILLIC SMALL LETTER VE: &#x432; => e2
&#xE2; => &#xE2;

CYRILLIC SMALL LETTER GHE: &#x433; => e3
&#xE3; => &#xE3;

CYRILLIC SMALL LETTER DE: &#x434; => e4
&#xE4; => &#xE4;

CYRILLIC SMALL LETTER IE: &#x435; => e5
&#xE5; => &#xE5;

CYRILLIC SMALL LETTER ZHE: &#x436; => e6
&#xE6; => &#xE6;

CYRILLIC SMALL LETTER ZE: &#x437; => e7
&#xE7; => &#xE7;

CYRILLIC SMALL LETTER I: &#x438; => e8
&#xE8; => &#xE8;

CYRILLIC SMALL LETTER SHORT I: &#x439; => e9
&#xE9; => &#xE9;

CYRILLIC SMALL LETTER KA: &#x43A; => ea
&#xEA; => &#xEA;

CYRILLIC SMALL LETTER EL: &#x43B; => eb
&#xEB; => &#xEB;

CYRILLIC SMALL LETTER EM: &#x43C; => ec
&#xEC; => &#xEC;

CYRILLIC SMALL LETTER EN: &#x43D; => ed
&#xED; => &#xED;

CYRILLIC SMALL LETTER O: &#x43E; => ee
&#xEE; => &#xEE;

CYRILLIC SMALL LETTER PE: &#x43F; => ef
&#xEF; => &#xEF;

CYRILLIC SMALL LETTER ER: &#x440; => f0
&#xF0; => &#xF0;

CYRILLIC SMALL LETTER ES: &#x441; => f1
&#xF1; => &#xF1;

CYRILLIC SMALL LETTER TE: &#x442; => f2
&#xF2; => &#xF2;

CYRILLIC SMALL LETTER U: &#x443; => f3
&#xF3; => &#xF3;

CYRILLIC SMALL LETTER EF: &#x444; => f4
&#xF4; => &#xF4;

CYRILLIC SMALL LETTER HA: &#x445; => f5
&#xF5; => &#xF5;

CYRILLIC SMALL LETTER TSE: &#x446; => f6
&#xF6; => &#xF6;

CYRILLIC SMALL LETTER CHE: &#x447; => f7
&#xF7; => &#xF7;

CYRILLIC SMALL LETTER SHA: &#x448; => f8
&#xF8; => &#xF8;

CYRILLIC SMALL LETTER SHCHA: &#x449; => f9
&#xF9; => &#xF9;

CYRILLIC SMALL LETTER HARD SIGN: &#x44A; => fa
&#xFA; => &#xFA;

CYRILLIC SMALL LETTER YERU: &#x44B; => fb
&#xFB; => &#xFB;

CYRILLIC SMALL LETTER SOFT SIGN: &#x44C; => fc
&#xFC; => &#xFC;

CYRILLIC SMALL LETTER E: &#x44D; => fd
&#xFD; => &#xFD;

CYRILLIC SMALL LETTER YU: &#x44E; => fe
&#xFE; => &#xFE;

CYRILLIC SMALL LETTER YA: &#x44F; => ff
&#xFF; => &#xFF;
