<?php

header('Content-Type: application/json');

require_once '../../modelo/jugador.php';
require_once '../../modelo/equipo.php';
require_once 'responses/consultarTodosResponses.php';

//e1
//j 11,12,13
//e2
//j 21,22,23,24

$j11 = new Jugador();
$j11->Nombre = 'Pedro Gonzalez';
$j11->Posicion = 'Delantero';
$j11->Debut = '17 de Agosto de 2005';
$j11->Goles = 10;

$j12 = new Jugador();
$j12->Nombre = 'Daniel Sanchez';
$j12->Posicion = 'Delantero';
$j12->Debut = '16 de Diciembre de 2010';
$j12->Goles = 0;

$j13 = new Jugador();
$j13->Nombre = 'Juan Perez';
$j13->Posicion = 'Defensor';
$j13->Debut = '17 de Septiembre de 2019';
$j13->Goles = 10;


$j21 = new Jugador();
$j21->Nombre = 'Ignacio Gonzalez';
$j21->Posicion = 'Arquero';
$j21->Debut = '17 de Enero de 2020';
$j21->Goles = 1;

$j22 = new Jugador();
$j22->Nombre = 'Ariel Cosentino';
$j22->Posicion = 'Mediocampista';
$j22->Debut = '16 de Diciembre de 2001';
$j22->Goles = 2;

$j23 = new Jugador();
$j23->Nombre = 'Diego Dominguez';
$j23->Posicion = 'Defensor';
$j23->Debut = '15 de Febrero de 2018';
$j23->Goles = 5;

$j24 = new Jugador();
$j24->Nombre = 'Gustavo Santos';
$j24->Posicion = 'Delantero';
$j24->Debut = '16 de Diciembre de 2009';
$j24->Goles = 3;

$e1 = new Equipo();
$e1->Id = 1;
$e1->Nombre = 'Equipo 1';
$e1->ListJugadores[] = $j11;
$e1->ListJugadores[] = $j12;
$e1->ListJugadores[] = $j13;
$e1->Fundacion = '3 de Noviembre de 1903 (119 años)';
$e1->Presidente = 'Javier Perez';

$e2 = new Equipo();
$e2->Id = 2;
$e2->Nombre = 'Equipo 2';
$e2->ListJugadores[] = $j21;
$e2->ListJugadores[] = $j22;
$e2->ListJugadores[] = $j23;
$e2->ListJugadores[] = $j24;
$e2->Fundacion = '5 de Abril de 1923 (99 años)';
$e2->Presidente = 'Ignacio Quinteros';

$res = new ListEquipos();
$res->ListEquipos[] = $e1;
$res->ListEquipos[] = $e2;


echo json_encode($res);
