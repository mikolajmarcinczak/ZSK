<?php
    $text = <<< TEKST
        zsk - Zespół
        Szkół
        Komunikacji
    TEKST;

    echo "Przed wywołaniem funkcji nl2br: <br> $text";
    echo "<br>Po wywołaniem funkcji nl2br: <br>";
    echo nl2br($text),'<br>';

    $test = 'jANuSz';

    echo strtolower($test), '<br>';
    echo strtoupper($test), '<br>';

    $test = 'janUsz Tomasz agata';

    echo ucfirst($test), '<br>';

    echo ucwords($test), '<br>';

    ##############################################################

    $lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laudantium, illo natus exercitationem quisquam corrupti nostrum ducimus esse vel? Nemo voluptas, est sit modi aperiam vero. Modi, fugiat sequi. Debitis, et. Vitae, ut! Tempore doloremque sint quidem quam quas nihil eius, ex voluptate iusto nobis ipsum cupiditate nemo quae perspiciatis a aspernatur quo, dolorum mollitia! Excepturi mollitia officia, et vero laudantium voluptatem ducimus ea voluptate illo doloremque veritatis debitis aliquam maxime consequatur expedita id reiciendis omnis, dicta delectus autem numquam optio fuga, reprehenderit animi. Praesentium delectus molestiae, iure explicabo nulla atque nostrum quibusdam fugit quam voluptas quae voluptates fuga consectetur expedita quod amet dolores magnam recusandae quasi magni! Laboriosam, maxime aliquam deleniti tempore voluptate facilis porro! Velit, aspernatur sapiente. Similique aut iusto dolore fugiat non asperiores! Aliquam neque sint, voluptates vel consequuntur aspernatur? Assumenda repudiandae cum ad reprehenderit magni consequatur voluptatem saepe veritatis expedita voluptate eos iste perspiciatis recusandae accusantium eius numquam, quaerat vero, illum placeat officia pariatur at adipisci beatae? Consequuntur dignissimos accusantium autem, est corrupti cum aspernatur quae aut nihil maiores soluta, architecto tempora quibusdam? Sed, ut culpa.';

    $col = wordwrap($lorem, 80, '<hr>');
    echo $col;

    ob_clean();

    $name = 'Kasia';
    $name1 = '  Kasia ';

    echo 'Długość zmiennej $name: ', strlen($name), '<br>';
    echo 'Długość zmiennej $name1: ', strlen($name1), '<br>';

    echo strlen(ltrim($name1));
    echo strlen(rtrim($name1));
    echo strlen(trim($name1)), '<hr>';


    $address = 'Poznań, ul. Fredry 13, tel. (61) 445-44-58';

    $search = strstr($address, 'tel');
    echo $search . '<br>';

    $search = strstr($address, 'tel', true);
    echo $search . '<br>';

    $search = stristr($address, 'Tel', true); //wielkosc liter bez znaczenia
    echo $search . '<br>';

    $mail = strstr('zsk@gmail.com', '@');
    echo $mail . '<br>';

    ################################################################

    $ciag1 = 'a';
    $ciag2 = 'aa';

    echo strcmp($ciag1, $ciag2); //porownanie lancuchow znakow
    echo strcmp('zzz', $ciag2);
    echo strcmp($ciag1, 'zzz') . '<br>';
    

    $pos = strpos('abcdefg', 'cde');
    echo $pos, '<br>';

    $pos = strpos('abcde', 'abc');
    echo $pos, '<br>';


    $text1 = 'abcdabcd';
    $text2 = 'ab';

    if (strpos($text1, $text2) === false) {
        echo "Ciąg $text2 nie został znaleziony w ciągu $text1";
    }
    else {
        echo "Ciąg $text2 został znaleziony w ciągu $text1"; 
    }

    $replace = str_replace('%name%', 'Janusz', 'Mam na imię: %name%');
    echo $replace, '<br>';

    $surname = substr('Janusz Kowalski', 2);
    echo $surname, '<br>';

    $surname = substr('Janusz Kowalski', 7, 5);
    echo $surname, '<br>';

    $login = "bąćżóś";
    $censore = array('ą', 'ę', 'ś', 'ż', 'ź', 'ć', 'ó', 'ń', 'ł');
    $replace = array('a', 'e', 's', 'z', 'z', 'c', 'o', 'n', 'l');

    $newLogin = str_replace($censore, $replace, $login);
    echo $newLogin . '<hr>';

    /* 
        Napisz aplikację cenzurującą zdanie podane przez użytkownika.
        Użytkownik podaje dane z formularza.
    */

    echo <<< FORM
    <form method="post">
        <input type="text" name="dane" placeholder="Wpisz zdanie"><br><br>
        <input type="submit" value="Zatwierdź">
    </form>
    FORM;

    if (isset($_POST['dane'])) {
        $data = $_POST['dane'];
        //echo $data;

        $censore = array('biały, czarny');
        $replace = '**#####**';
        $correct = str_ireplace($censore, $replace, $data);
        echo "Dane przed poprawą: " . $data "<br>" . "Dane po poprawie: " . $correct;
    }

?>