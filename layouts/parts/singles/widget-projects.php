<?php 
if($this->controller->action === 'create'){ 
    return;
}


$is_project = false;
$label = 'Projetos';

if($entity instanceof MapasCulturais\Entities\Project){
    $is_project = true;
    $label = 'Subprojetos';
}

?>

<div class="widget">
    <?php if ($projects): ?>
        <h3><?php echo $label ?></h3>
        <ul class="widget-list js-slimScroll">
            <?php foreach ($projects as $project): ?>
                <li class="widget-list-item"><a href="<?php echo $project->singleUrl; ?>"><span><?php echo $project->name; ?></span></a></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <?php 
	$proj = array(116,117,118,135,136,137,245,249,250,251,261,264,409);
	if ($is_project && $entity->canUser('createChild') && !(in_array($entity->id, $proj)) || $app->user->is('superAdmin') || $app->user->is('admin')): ?>
        <a class="btn btn-default add" href="<?php echo $app->createUrl('project', 'create', array('parentId' => $entity->id)) ?>"><?php \MapasCulturais\i::_e("Adicionar subprojeto");?></a>
    <?php endif; ?>
</div>
