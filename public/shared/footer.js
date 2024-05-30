class Footer extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <style>
          
        </style>

        <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
            <div class="container-fluid tm-container-small">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                        <h3 class="tm-text-primary mb-4 tm-footer-title">A propos de PLANTANIA</h3>
                        <p>
                            Une plateforme compléte pour le meilleur suivi de vos plantations.
                            Créer un compte permet à l'utilisateur d'accèder à l'ensemble de la plateforme.
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                        <h3 class="tm-text-primary mb-4 tm-footer-title">Nos liens</h3>
                        <ul class="tm-footer-links pl-0">
                            <li><a  href="<?=base_url()?>/#">Liens externes</a></li>
                            <li><a  href="<?=base_url()?>/about.html">A propos</a></li>
                            <li><a  href="<?=base_url()?>/contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                        <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                            <li class="mb-2"><a  href="<?=base_url()?>/https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                            <li class="mb-2"><a  href="<?=base_url()?>/https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li class="mb-2"><a  href="<?=base_url()?>/https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                        Copyright 2024 > GrowAdapt. Tous droits réservés.
                    </div>
                </div>
            </div>
        </footer>      
       
      `;
    }
}

customElements.define('footer-component', Footer);