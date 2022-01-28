let lgpdUrl = 'https://newsscenterpecaspremium.com.br/';

let lgpdHtml = `<div class="lgpd border border-1 bg-light rounded text-light row">
    <div class="col-md-10 container d-flex justify-content-center">
        <p><h5><strong>Start_<span style='color: #2c76ee'>Jobs. </span></strong> utiliza cookies para entregar uma melhor experiência durante a navegação.
        <a class="btn" href="index.php?politica">politica de privacidade</a></h5></p>
    </div>
    <div class="col-md-2 d-flex justify-content-center">
        <button type="submit" class="button primary mb-3">Confirmar cookies</button>
    </div>
</div>`;

let lscontent = localStorage.getItem('lgpd');
if (!lscontent) {
    document.body.innerHTML += lgpdHtml;


    let lgpdArea = document.querySelector('.lgpd');
    let lgpdButton = lgpdArea.querySelector('button');

    lgpdButton.addEventListener('click', () => {
        lgpdArea.remove();

        /*  let result = await fetch(lgpdUrl);
         let json = await result.json();
         if (json.erro != '') {
             let id = '123';
             localStorage.setItem('lgpd', '123');
         } */



        localStorage.setItem('lgpd', '123');
    });
}