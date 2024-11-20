<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    protected $fillable = ['email', 'rating', 'review', 'images', 'likes', 'comments'];

    /**
     * Get the review's created time as a diffForHumans string
     */
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    /**
     * Get the review's masked email
     */
    public function getMaskedEmailAttribute()
    {
        return substr($this->email, 0, 3) . '***@' . explode('@', $this->email)[1];
    }

    /**
     * Get the review's comments as an array
     */
    public function getCommentsArrayAttribute()
    {
        return json_decode($this->comments, true) ?? [];
    }

    /**
     * Toggle like for this review
     */
    public function toggleLike()
    {
        $this->likes = ($this->likes ?? 0) + 1;
        $this->save();
        return $this->likes;
    }

    /**
     * Add a comment to this review
     */
    public function addComment($text)
    {
        $comments = $this->commentsArray;
        array_unshift($comments, [
            'text' => $text,
            'created_at' => now()
        ]);
        $this->comments = json_encode($comments);
        $this->save();
        return [
            'comment' => $text,
            'created_at' => now()
        ];
    }
}