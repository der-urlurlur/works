using System;

namespace ЧМ
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.Write("Введите точность в формате (0,...1)   ");
            double e = Convert.ToDouble(Console.ReadLine());
            int ct = etc(e);
            int n = 0;
            double x, x1, x0;
            x0 = 0;
            bool err = false;
            do
            {
                x1 = func(x0);
                Console.WriteLine("{0} x0={1}, x1={2}",n,x0,x1);
                n++;
                if (Math.Abs(x1 - x0) >= e && n == 1000)
                {
                    err = true;
                    break;
                }
                x0 = x1;
            }
            while (Math.Abs(x0 - func(x0)) > e);
            if (err)
            {
                Console.WriteLine("Не найдено");
            }
            else
            {
                Console.WriteLine("Ответ: X = {0} ", Math.Round(x1, ct));
                Console.WriteLine("Итераций пройдено: {0}", n);
            }
        }

        static double func(double x)
        {
            return 6 / (Math.Pow(x, 2) + 4);
        }
        static int etc(double e)
        {
            int ct = 0;
            while (e * 10 % 10 != 0)
            {

                e *= 10;
                ct++;
            }
            return ct;
        }
    }
}
