    <?php $fields = get_fields();?>
    <footer data-aos="fade-up">
        <div class="container">
            <div class="left-right-container">
                <div class="left">
                    <?php for($i = 1; $i <= 6; $i++): ?>
                        <?php if(!empty($fields['texto_rodape_'.$i])): ?>
                            <p><?= $fields['texto_rodape_'.$i] ?></p>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <div class="right">
                    <p>Central de Atendimento MedicFácil</p>
                    <div class="wrapper-email-wrapper">
                        <div class="email-wrapper">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-mail-bulk" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z"></path></svg>
                            <a href="mailto:<?= $fields['email'] ?>" class="email"><?= $fields['email'] ?></a>
                        </div>
                    </div>
                    <div class="wrapper-telefone-wrapper">
                        <div class="telefone-wrapper">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
                            </svg>
    
                            <a href="https://wa.me/<?= $fields['telefone'] ?>?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%20MedicF%C3%A1cil%20e%20gostaria%20de%20saber%20valores,%20retorno%20e%20como%20funciona%20a%20franquia." 
                                class="telefone" 
                                target="_blank">
                                <?= $fields['telefone'] ?>
                            </a>
                        </div>
                    </div>

                    <?php if(!empty($fields['telefone_2'])): ?>
                        <div class="wrapper-telefone-wrapper">
                            <div class="telefone-wrapper">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path>
                                </svg>
    
                                <a href="https://wa.me/<?= $fields['telefone_2'] ?>?text=Ol%C3%A1!%20Vim%20pelo%20site%20da%20MedicF%C3%A1cil%20e%20gostaria%20de%20saber%20valores,%20retorno%20e%20como%20funciona%20a%20franquia." 
                                    class="telefone" 
                                    target="_blank">
                                    <?= $fields['telefone_2'] ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
