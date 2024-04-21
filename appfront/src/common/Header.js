import react from 'react'
import { BrowserRouter as Router, Routes, Route, Navigate } from 'react-router-dom';


function Header() {
    return (
        <>

            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="logohome navbar-brand" href="/"> <img src='images/logo.png' alt='logo sabunyuma' width={100} /> </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Découvrir SBN
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/presentation">Présentation</a></li>
                                    <li><a class="dropdown-item" href="#">Nos partenaires</a></li>
                                    <li><a class="dropdown-item" href="#">Réseaux tiers payants</a></li>
                                    <li><a class="dropdown-item" href="#">Notre équipe</a></li>
                                    <li><a class="dropdown-item" href="#">Nos conseils</a></li>
                                    <li><a class="dropdown-item" href="#">Nos agences</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Comment souscrire
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Assurance Auto/Moto</a></li>
                                    <li><a class="dropdown-item" href="#">Assurance Accidents corporels</a></li>
                                    <li><a class="dropdown-item" href="#">Responsabilité civile générale</a></li>
                                    <li><a class="dropdown-item" href="#">Responsabilité civile professionnelle</a></li>
                                    <li><a class="dropdown-item" href="#">Assurance transport de marchandises</a></li>
                                    <li><a class="dropdown-item" href="#">Assurance tout risque chantiers</a></li>
                                    <li><a class="dropdown-item" href="#">Assurance multirisques habitation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Nos produits
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">L'assurance des deux/trois roues</a></li>
                                    <li><a class="dropdown-item" href="#">L'assurance pack automobile</a></li>
                                    <li><a class="dropdown-item" href="#">La RC scolaire</a></li>
                                    <li><a class="dropdown-item" href="#">L'assurance pack mixte</a></li>
                                    <li><a class="dropdown-item" href="#">L'assurance santé Ikeneya</a></li>
                                    <li><a class="dropdown-item" href="#">L'assurance mortalité du bétail</a></li>
                                    <li><a class="dropdown-item" href="#">L'assurance voyage intégrale</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Déclaration Sinistres
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Sinistres Auto/Moto</a></li>
                                    <li><a class="dropdown-item" href="#">Autres Sinistres</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dévis en ligne </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Devenir agence générale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Foire aux questions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>

                        </ul>
                        <div class="header_socials">                            
                            <a target="_blank" href="https://www.facebook.com/sabunyumanmali/"><img src='logo/facebook.png' alt='facebook' width={30}/></a>
                         </div>
                    </div>
                </div>
            </nav>
        </>
    )
}
export default Header