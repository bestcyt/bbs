<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'category_id', 'excerpt', 'slug'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function link($params = [])
    {
        return route('topics.show', array_merge([$this->id, $this->slug], $params));
    }

    //创建本地作用域
    public function scopeWithOrder($query,$order){
        switch ($order){
            case 'recent':
                $query = $this->scopeRecent($query);
                break;
            default:
                $query = $this->scopeRecentReplied($query);
                break;
        }
        //预加载防止n+1问题
        return $query->with('user','category');
    }

    //按照最新回复排序
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc');
    }

    //按照创建时间排序
    public function scopeRecentReplied($query){
        // 当话题有新回复时，我们将编写逻辑来更新话题模型的 reply_count 属性，
        // 此时会自动触发框架对数据模型 updated_at 时间戳的更新
        return $query->orderBy('updated_at', 'desc');
    }
}
