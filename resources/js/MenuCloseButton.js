/**
 * Code that written below is belong to Zain Alwan Wima Irfani. You may
 * not use, share, modify, and study without the author's permission
 * (zainalwan4@gmail.com).
 */

let MenuCloseButton = function() {
    this.menuCloseButton = document.getElementsByClassName('menu-close-button')[0];
    this.menuList = document.getElementsByTagName('nav')[0].children[0];
    this.menuShowed = false;

    this.showMenu = () => {
        this.menuList.style.top = '48.6px';
        this.menuCloseButton.children[1].style.opacity = '0';
        this.menuCloseButton.children[0].style.transform = 'translate(0, 8px) rotate(45deg)';
        this.menuCloseButton.children[2].style.transform = 'translate(0, -8px) rotate(-45deg)';

        this.menuShowed = true;
    }

    this.hideMenu = () => {
        this.menuList.style.top = '-243px';
        this.menuCloseButton.children[1].style.opacity = '1';
        this.menuCloseButton.children[0].style.transform = '';
        this.menuCloseButton.children[2].style.transform = '';
        
        this.menuShowed = false;
    }

    this.showHideMenu = () => {
        if(this.menuShowed) {
            return this.hideMenu();
        }

        return this.showMenu();
    }

    this.animate = () => {
        this.menuCloseButton.addEventListener('click', this.showHideMenu);
    }
}
