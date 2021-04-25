<?php
/**
 * FeaturedProjectResponse.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.62
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the FeaturedProjectResponse model.
 *
 * @author  OpenAPI Generator team
 */
class FeaturedProjectResponse
{
  /**
   * @var string|null
   * @SerializedName("id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $id;

  /**
   * @var string|null
   * @SerializedName("project_id")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $project_id;

  /**
   * @var string|null
   * @SerializedName("project_url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $project_url;

  /**
   * @var string|null
   * @SerializedName("url")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $url;

  /**
   * @var string|null
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $name;

  /**
   * @var string|null
   * @SerializedName("author")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $author;

  /**
   * @var string|null
   * @SerializedName("featured_image")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $featured_image;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->project_id = isset($data['project_id']) ? $data['project_id'] : null;
    $this->project_url = isset($data['project_url']) ? $data['project_url'] : null;
    $this->url = isset($data['url']) ? $data['url'] : null;
    $this->name = isset($data['name']) ? $data['name'] : null;
    $this->author = isset($data['author']) ? $data['author'] : null;
    $this->featured_image = isset($data['featured_image']) ? $data['featured_image'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @return $this
   */
  public function setId(string $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets project_id.
   */
  public function getProjectId(): ?string
  {
    return $this->project_id;
  }

  /**
   * Sets project_id.
   *
   * @return $this
   */
  public function setProjectId(string $project_id = null)
  {
    $this->project_id = $project_id;

    return $this;
  }

  /**
   * Gets project_url.
   */
  public function getProjectUrl(): ?string
  {
    return $this->project_url;
  }

  /**
   * Sets project_url.
   *
   * @return $this
   */
  public function setProjectUrl(string $project_url = null)
  {
    $this->project_url = $project_url;

    return $this;
  }

  /**
   * Gets url.
   */
  public function getUrl(): ?string
  {
    return $this->url;
  }

  /**
   * Sets url.
   *
   * @return $this
   */
  public function setUrl(string $url = null)
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @return $this
   */
  public function setName(string $name = null)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @return $this
   */
  public function setAuthor(string $author = null)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets featured_image.
   */
  public function getFeaturedImage(): ?string
  {
    return $this->featured_image;
  }

  /**
   * Sets featured_image.
   *
   * @return $this
   */
  public function setFeaturedImage(string $featured_image = null)
  {
    $this->featured_image = $featured_image;

    return $this;
  }
}
