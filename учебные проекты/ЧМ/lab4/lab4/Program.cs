using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab4
{
    class Program
    {
        static double InterpolateLagrange(double x, double[] xValues, double[] yValues, int size)
        {
            Double lagrangePol = 0;
            for (int i = 0; i < size; i++)
            {
                Double basicsPol = 1;
                for (int j = 0; j < size; j++)
                {
                    if (j != i)
                    {
                        basicsPol *= (x - xValues[j]) / (xValues[i] - xValues[j]);
                    }
                }
                lagrangePol += basicsPol * yValues[i];
            }
            return lagrangePol;
        }

        static void Main(string[] args)
        {
            int n = 11;
            
            double[] xValues = new double[] { 1, 4, 17, 23.3, 31.3, 39.3, 47.3, 55.3, 63.3 };
            double[] yValues = new double[] { 1.1, 2.2, 3.3, 4.4, 5.5, 6.6, 7.7, 8.8, 9.9 };
            Console.WriteLine("Введите x1");
            double x1 = double.Parse(Console.ReadLine());
            Console.WriteLine("F(x) = " + InterpolateLagrange(x1, xValues, yValues, n));
        }
    }
}
