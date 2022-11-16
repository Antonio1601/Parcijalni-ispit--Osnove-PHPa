<?php
    function brojacZnakova($word)
    {
        $word = strtolower($word);  // Prebacuje string u mala slova
        $word = str_split($word);  // Podijeli riječ ili string na slova (niza) -> Ana = A,N,A

        $suglasnik = 0;
        $samoglasnik = 0;

        foreach($word as $character) // $word - niz (ANA), $character - članovi niza [A,N,A]
        {
            switch($character) 
            {
                case "a":
                case "e":
                case "i":
                case "o":
                case "u":
                    $samoglasnik++;
                    break;
                default:
                    $suglasnik++;
                    break;
            }
        }
        return array($samoglasnik ,$suglasnik);
    }

?>