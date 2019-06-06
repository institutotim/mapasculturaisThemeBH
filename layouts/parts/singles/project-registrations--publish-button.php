<?php 
    $proj = array(116,117,118,135,136,137,245,249,250,251,261,264,409);
	if ($entity->canUser('@control') && ( !(in_array($entity->id, $proj)) || $app->user->is('superAdmin') || $app->user->is('admin'))): ?>
    <?php if ($entity->publishedRegistrations): ?>
        <div class="clearfix">
            <p class='alert success'><?php \MapasCulturais\i::_e("O resultado já foi publicado");?></p>
        </div>
    <?php else: ?>
        <div class="clearfix">
            <?php if ($entity->canUser('publishRegistrations')): ?>
                <a id="btn-publish-results" class="btn btn-primary" href="<?php echo $app->createUrl('project', 'publishRegistrations', [$entity->id]) ?>"><?php \MapasCulturais\i::_e("Publicar resultados");?></a>
            <?php else: ?>
                <a id="btn-publish-results" class="btn btn-primary disabled hltip" title="<?php \MapasCulturais\i::esc_attr_e("Você só pode publicar a lista de aprovados após o término do período de inscrições.");?>"><?php \MapasCulturais\i::_e("Publicar resultados");?></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
