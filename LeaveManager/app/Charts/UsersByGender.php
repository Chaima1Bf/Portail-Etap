<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UsersByGender
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Employés par Genre')
            ->addData(
                [
                    User::where('gender' , 'Male')->count(),
                    User::where('gender' , 'Female')->count()
                ]
                
            )
            ->setColors(['#5f8a8b' , '#f46e5f'])
            ->setLabels(['Homme','Femme']);
    }
}
