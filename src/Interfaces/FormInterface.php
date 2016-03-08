<?php namespace Dtkahl\FormBuilder\Interfaces;

use Dtkahl\FormBuilder\FormBuilder;
use Dtkahl\FormBuilder\Traits\FormTrait;

/**
 * @mixin FormTrait
 */
interface FormInterface
{

  /**
   * FormInterface constructor.
   * @param string $name
   * @param FormBuilder $builder
   * @param array $options
   */
  public function __construct(string $name, FormBuilder $builder, array $options= []);

  /**
   * @param string $name
   * @param string $element
   * @param array $options
   * @return mixed
   */
  public function registerElement(string $name, string $element, array $options = []);

  /**
   * @return FormElementInterface[]
   */
  public function getElements();

  /**
   * @return string
   */
  public function render();

  /**
   * @return FormInterface
   */
  public function save();

}