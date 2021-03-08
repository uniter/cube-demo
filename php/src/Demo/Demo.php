<?php

/*
 * Demo hybrid Three.js JS/PHP client-side app with Uniter-Loader
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

namespace Uniter\Demo\Cube\Demo;

/**
 * Class Demo
 *
 * @author Jadu Ltd.
 */
class Demo
{
    /**
     * @var object
     */
    private $camera;

    /**
     * @var object|null
     */
    private $mesh = null;

    /**
     * @var object
     */
    private $renderer;

    /**
     * @var callable
     */
    private $requestAnimationFrame;

    /**
     * @var object
     */
    private $scene;

    /**
     * @var object
     */
    private $threeJS;

    /**
     * @var object
     */
    private $window;

    /**
     * @param $window
     * @param object $threeJS
     * @param callable $requestAnimationFrame
     */
    public function __construct($window, $threeJS, callable $requestAnimationFrame)
    {
        $this->requestAnimationFrame = $requestAnimationFrame;
        $this->threeJS = $threeJS;
        $this->window = $window;
    }

    private function drawFrame()
    {
        $this->mesh->rotation->x += 0.005;
        $this->mesh->rotation->y += 0.01;

        $this->renderer->render($this->scene, $this->camera);

        $this->requestNextFrame();
    }

    private function requestNextFrame()
    {
        $requestAnimationFrame = $this->requestAnimationFrame;
        $demo = $this;
        $requestAnimationFrame(function () use ($demo) {
            $demo->drawFrame();
        });
    }

    /**
     * Starts the demo
     */
    public function start()
    {
        $this->camera = new $this->threeJS->PerspectiveCamera(
            70,
            $this->window->innerWidth / $this->window->innerHeight,
            1,
            1000
        );
        $this->camera->position->z = 400;

        $this->scene = new $this->threeJS->Scene();

        $texture = (new $this->threeJS->TextureLoader())->load('textures/crate.gif');

        $geometry = new $this->threeJS->BoxGeometry(200, 200, 200);
        $material = new $this->threeJS->MeshBasicMaterial((object)['map' => $texture]);

        $this->mesh = new $this->threeJS->Mesh($geometry, $material);
        $this->scene->add($this->mesh);

        $this->renderer = new $this->threeJS->WebGLRenderer();
        $this->renderer->setPixelRatio($this->window->devicePixelRatio);
        $this->renderer->setSize($this->window->innerWidth, $this->window->innerHeight);
        $this->window->document->body->appendChild($this->renderer->domElement);

        $demo = $this;

        $this->window->addEventListener('resize', function () use ($demo) {
            /** @var object $this */
            $demo->camera->aspect = $this->innerWidth / $this->innerHeight;
            $demo->camera->updateProjectionMatrix();

            $demo->renderer->setSize($this->innerWidth, $this->innerHeight);
        }, false);

        $this->requestNextFrame();

        print 'Started.';
    }
}
