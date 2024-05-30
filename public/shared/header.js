class Header extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        this.innerHTML = `
            <style>          
            </style>

            <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="<?=base_url()?>/img/front_img.webp">
                
            </div>        
      `;
    }
}

customElements.define('header-component', Header);