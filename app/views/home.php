<?= $this->layout('master', ['title' => $title]) ?>

<section class="container-left">
    <article class="logo-img">
        <img src="assets/images/logo_login.png" alt="Clube Full-Stack">
    </article>

    <article class="logo-text">
        <h3>Seja bem vindo ao</h3>
        <h1>Clube Full-Stack</h1>
    </article>
</section>

<section class="container-right">

    <h1>Faça seu login</h1>

    <form class="form-login">

        <div id="message"></div>

        <div>
            <label>Usuário:</label>
            <input type="text" name="email" placeholder="Ex.: usuarioteste" class="input input-dark">
        </div>
        <div id="passwordContainer">
            <label>Senha:</label>
            <input id="password" name="password" type="password" placeholder="Ex.: senhateste" class="input input-dark">
            <i data-feather="eye-off" class="iconFeather"></i>
        </div>
        <button class="btn btn-login" type="submit">Entrar</button>
    </form>
</section>