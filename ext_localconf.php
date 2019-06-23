<?php


call_user_func(
    function ($extKey) {

        /** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
        $rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
        $rendererRegistry->registerRendererClass(\WapplerSystems\Videos\Resource\Rendering\VideoTagRenderer::class);

        if (TYPO3_MODE === 'BE') {

            $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
            $iconRegistry->registerIcon(
                'mimetypes-x-content-videos_playlist',
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:core/Resources/Public/Icons/T3Icons/mimetypes/mimetypes-x-content-multimedia.svg']
            );

        }


    },
    'videos'
);
