<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    
    public function index(): Response
    
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <h1>LISTES DES CLIENTS</h1>
<table>
    <thead>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>CONTACT</th>
    </thead>
    <tbody>
        <tr>
            <td>LOUËR</td>
            <td>Guénaël</td>
            <td>guenael.louer@gmail.com</td>
        </tr>
        <tr>
            <td>BEUNEUX</td>
            <td>Laure</td>
            <td>laure.beuneux@gmail.com</td>
        </tr>
        <tr>
            <td>BEUNEUX--LOUËR</td>
            <td>Lucïlou</td>
            <td>lucilou.beuneux.louer@gmail.com</td>
        </tr>
    </tbody>
</table>
    <a href="#">Créer un nouveau client</a>
</body>
</html>
