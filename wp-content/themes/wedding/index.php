<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wedding
 */

get_header();


?>

<div>
    
    <div id="invitation-top"></div>
    <div id="invitation"> 
        <div>
            <img src="/wp-content/themes/wedding/img/frame.png" id="wedding-photo">
   
        </div>
        <div id="invitation-text" class="clearfix" >
        
            Renata Gawron i Bogdan Kuryło<br>
            wraz z Rodzicami<br>
            mają zaszczyt zaprosić<br>
            na uroczystość Sakramentu Małżeństwa,<br>
            która odbędzie się<br>
            w dniu 6 października 2018 roku<br>
            o godzinie 14:00<br>
            w Parafii pw. Najwiętszej Marii Panny Wniebowziętej w Wielopolu Skrzyńskim<br>
            <br>
            Po uroczystośći zaślubin miło nam będzie gościć Państwa na przyjęciu weselnym w Hotelu "Ines" w Sędziszowie Małopolskim.<br>
            <br>
            Miłość mi wszystko wyjaśniła<br>
            Miłość wszystko rozwiązała<br>
            Dlatego uwielbiam tę Miłość,<br>
            Gdziekolwiek by przebywała.<br>
            <div id="author">Poezja Jan Paweł II</div>
       
        </div>
    </div>
    <div id="invitation-bottom"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<?php
//get_sidebar();
get_footer();
