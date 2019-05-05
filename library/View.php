<?php
/**
 * Class View
 */
class View
{
    /**
     * Render view
     *
     * @param array $params
     * @throws Exception
     */
    public function render(array $params)
    {
        $filePath = sprintf('views/%s/%s.php', $params['controller'], $params['action']);

        if (!file_exists($filePath)) {
            throw new Exception('View file not found');
        }

        require 'layout/header.php';
        require $filePath;
        require 'layout/footer.php';
    }
}