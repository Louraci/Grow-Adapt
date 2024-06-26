class Navbar extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
        <style>
          
        </style>
        
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="agriculteur" >
                    <i class="fas fa-leaf mr-2"></i>
                    GrowAdapt
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link nav-link-1 active" aria-current="page" href="planteresult">Plantes de référence</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-link-4" href="planteform">Nouvelle Plante</a>

                        </li>

                        <li class="nav-item dropdown">
                            
                                <a class="nav-link nav-link-4" href="user">Gestion des Utilisateurs</a>
                            
                        </li>

                       

                        

                    </ul>
                </div>
            </div>
        </nav>
      `;
    }
}

customElements.define('navbar-component', Navbar);