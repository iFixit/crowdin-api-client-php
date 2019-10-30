<?php

namespace Crowdin\Model;

/**
 * Class File
 * @package Crowdin\Model
 */
class File extends BaseModel
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var integer
     */
    protected $projectId;

    /**
     * @var integer
     */
    protected $branchId;

    /**
     * @var integer
     */
    protected $directoryId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var integer
     */
    protected $revision;

    /**
     * @var integer
     */
    protected $status;

    /**
     * @var integer
     */
    protected $priority;

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var string
     */
    protected $exportPattern;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $updatedAt;

    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->id = $this->getDataProperty('id');
        $this->projectId = $this->getDataProperty('projectId');
        $this->branchId = $this->getDataProperty('branchId');
        $this->directoryId = $this->getDataProperty('directoryId');
        $this->languageId = $this->getDataProperty('languageId');
        $this->name = $this->getDataProperty('name');
        $this->title = $this->getDataProperty('title');
        $this->type = $this->getDataProperty('type');
        $this->revision = $this->getDataProperty('revision');
        $this->status = $this->getDataProperty('status');
        $this->priority = $this->getDataProperty('priority');
        $this->attributes = $this->getDataProperty('attributes');
        $this->exportPattern = $this->getDataProperty('exportPattern');
        $this->createdAt = $this->getDataProperty('createdAt');
        $this->updatedAt = $this->getDataProperty('updatedAt');
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     */
    public function setProjectId(int $projectId): void
    {
        $this->projectId = $projectId;
    }

    /**
     * @return int
     */
    public function getBranchId(): int
    {
        return $this->branchId;
    }

    /**
     * @param int $branchId
     */
    public function setBranchId(int $branchId): void
    {
        $this->branchId = $branchId;
    }

    /**
     * @return int
     */
    public function getDirectoryId(): int
    {
        return $this->directoryId;
    }

    /**
     * @param int $directoryId
     */
    public function setDirectoryId(int $directoryId): void
    {
        $this->directoryId = $directoryId;
    }

    /**
     * @return string
     */
    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    /**
     * @param string $languageId
     */
    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getRevision(): int
    {
        return $this->revision;
    }

    /**
     * @param int $revision
     */
    public function setRevision(int $revision): void
    {
        $this->revision = $revision;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return string
     */
    public function getExportPattern(): string
    {
        return $this->exportPattern;
    }

    /**
     * @param string $exportPattern
     */
    public function setExportPattern(string $exportPattern): void
    {
        $this->exportPattern = $exportPattern;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt(string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
